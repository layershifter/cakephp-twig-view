<?php

class Twig_Extension_View extends Twig_Extension
{
    public function getName()
    {
        return 'ViewHelper';
    }

    public function getFunctions()
    {
        return array(
            'element' => new Twig_Function_Function('TwigView_Filter_View::element'),
        );
    }
}

TwigView::registerExtension(__FILE__, 'Twig_Extension_View');

class TwigView_Filter_View extends TwigView_Extension
{
    public static function element(...$args)
    {
        $view = ClassRegistry::getObject('view');

        return $view->element(...$args);
    }
}
