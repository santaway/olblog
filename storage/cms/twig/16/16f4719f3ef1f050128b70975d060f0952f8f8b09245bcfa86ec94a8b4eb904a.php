<?php

/* F:\OpenServer\domains\olblog/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm */
class __TwigTemplate_bc7b49b4ebe6b823b454726e95461576e5ab1a46e7d5c7c936c24c5a7ec27b33 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "F:\\OpenServer\\domains\\olblog/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm";
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
        return new Twig_Source("{% component 'blogPost' %}", "F:\\OpenServer\\domains\\olblog/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm", "");
    }
}
