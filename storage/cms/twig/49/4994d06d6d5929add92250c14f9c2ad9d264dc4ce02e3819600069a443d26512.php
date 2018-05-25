<?php

/* F:\OpenServer\domains\olblog/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm */
class __TwigTemplate_ce0d0657fba19c50dee4f8c2b04ace56b62d10963fff954ba35349256ceeba17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "F:\\OpenServer\\domains\\olblog/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPosts' %}", "F:\\OpenServer\\domains\\olblog/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm", "");
    }
}
