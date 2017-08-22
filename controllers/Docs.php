<?php
class Docs extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	// トップページ
	public function index()
	{
		$this->page(__FUNCTION__);
	}

	// 検索
	public function search()
	{
		if ($_POST !== [])
		{
			$_SESSION[uri('actor')]['docs']['search'] = $_POST['search'];
			redirect('docs/search');
		}
		$vars = [];
		foreach (scandir('vendor/sagittar-org/pieni-docs/views/docs') as $file)
		{
			if ( ! is_file("vendor/sagittar-org/pieni-docs/views/docs/{$file}"))
			{
				continue;
			}
			if (in_array($file, ['contents.php', 'page.php', 'search.php']))
			{
				continue;
			}
			$grep = shell_exec("grep '{$_SESSION[uri('actor')]['docs']['search']}' vendor/sagittar-org/pieni-docs/views/docs/{$file}");
			if ($grep === NULL)
			{
				continue;
			}
			$grep = preg_replace('/<\?php[^>]*\?>/', '', $grep);
			$grep = strip_tags($grep);
			$vars[] = [
				'cmd' => "grep '{$_SESSION[uri('actor')]['docs']['search']}' vendor/sagittar-org/pieni-docs/views/docs/{$file}",
				'file' => preg_replace('/\.php$/', '', $file),
				'grep' => h($grep, TRUE),
			];
		}
		load_template('search', $vars);
	}

	// ページ表示
	public function page($view)
	{
		$buffer = load_template($view, [], uri('class'), TRUE);
		$buffer = preg_replace('#<code>./([^<]+)</code>#', '<code><a href="'.href('docs/file', TRUE, TRUE, TRUE).'/${1}">${1}</a></code>', $buffer);
		echo $buffer;
	}

	// ファイルビューア
	public function file()
	{
		$filename = implode('/', uri('param_arr'));
		$path = "vendor/sagittar-org/pieni/{$filename}";
		if ( ! preg_match('#^'.getcwd().'/vendor/sagittar-org/pieni#', realpath($path)))
		{
			show_404();
		}
		if (is_dir($path))
		{
			$vars['dir'] = $filename.($filename !== '' ? '/' : '');
			$vars['dir_list'] = [];
			$vars['file_list'] = [];
			foreach (scandir("vendor/sagittar-org/pieni/{$vars['dir']}") as $filename)
			{
				if ( ! is_file("vendor/sagittar-org/pieni/{$vars['dir']}{$filename}"))
				{
					if (in_array($filename, ['.', '..']))
					{
						continue;
					}
					$vars['dir_list'][] = $filename;
				}
				else
				{
					$vars['file_list'][] = $filename;
				}
			}
		}
		else
		{
			$vars['dir'] = dirname($filename).(dirname($filename) !== '.' ? '/' : '');
			$vars['contents'] = file_get_contents("vendor/sagittar-org/pieni/{$filename}");
		}
		load_template(__FUNCTION__, $vars);
	}
}
