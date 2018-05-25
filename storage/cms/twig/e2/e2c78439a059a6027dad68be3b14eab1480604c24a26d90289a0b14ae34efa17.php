<?php

/* F:\OpenServer\domains\olblog/themes/hambern-hambern-blank-bootstrap-4/layouts/fallback.htm */
class __TwigTemplate_8d29cf835e08e2a0fcef6e6e6924995a948021a57d9fe0faae3ee7107483f503 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "F:\\OpenServer\\domains\\olblog/themes/hambern-hambern-blank-bootstrap-4/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "F:\\OpenServer\\domains\\olblog/themes/hambern-hambern-blank-bootstrap-4/layouts/fallback.htm", "");
    }
}
