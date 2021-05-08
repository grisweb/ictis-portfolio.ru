<?php


namespace app\widgets\filter;


use ictis_portfolio\Cache;

class Filter
{
    public function __construct()
    {
        $this->tpl = __DIR__ . '/filter_tpl.php';
        $this->run();
    }

    protected function run()
    {
        $cache = Cache::instance();
        $this->categories = $cache->get('filter_categories');

        if(!$this->categories)
        {
            $this->categories = $this->getCategories();
            $cache->set('filter_categories', $this->categories, 5);
        }

        $filter = $this->getHTML();
        echo $filter;
    }

    protected function getCategories()
    {
        return \R::getAssoc('SELECT id, title FROM categories');
    }

    protected function getHTML()
    {
        ob_start();

        $filter = self::getFilter();

        if(!empty($filter))
        {
            $filter = explode(',', $filter);
        }

        require $this->tpl;
        return ob_get_clean();
    }

    public static function getFilter()
    {
        $filter = null;
        if (!empty($_GET['filter']))
        {
            $filter = preg_replace("#[^\d,]+#", '', $_GET['filter']);
            $filter = trim($filter, ',');
        }
        return $filter;
    }

    protected $tpl;
    protected $categories;
}