<?php

/* F:\OpenServer\domains\olblog/themes/hambern-hambern-blank-bootstrap-4/pages/contacts.htm */
class __TwigTemplate_92668cb681bbce88fe17f5bfd5dbb2717e23ba4e583df7ab2af60fb1118602a8 extends Twig_Template
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
        echo "<h1>Контакты</h1>
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "F:\\OpenServer\\domains\\olblog/themes/hambern-hambern-blank-bootstrap-4/pages/contacts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Контакты</h1>
{% component 'contactForm' %}", "F:\\OpenServer\\domains\\olblog/themes/hambern-hambern-blank-bootstrap-4/pages/contacts.htm", "");
    }
}
