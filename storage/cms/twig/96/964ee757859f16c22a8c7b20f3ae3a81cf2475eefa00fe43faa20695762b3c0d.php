<?php

/* F:\OpenServer\domains\olblog/themes/hambern-hambern-blank-bootstrap-4/partials/jumbotron.htm */
class __TwigTemplate_43bea7d8f79e59f929a07a13b6c0355de8fe2d0e086276efbd6ef6e6e3f8b381 extends Twig_Template
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
        echo "<section id=\"jumbotron\" class=\"m-t-3\">
\t<div class=\"jumbotron\">
\t\t<div class=\"container text-xs-center\">
\t\t\t";
        // line 4
        $context['__placeholder_jumbotron_default_contents'] = null;        ob_start();        // line 5
        echo "\t\t\t<h1 class=\"display-3\">Ol BLog</h1>
\t\t\t<p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, porro, corporis, repellendus, quod a delectus voluptas quas aliquam itaque exercitationem nam culpa doloremque sunt cumque magni fuga nemo amet quo.</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more</a>
\t\t\t</p>
\t\t\t";
        $context['__placeholder_jumbotron_default_contents'] = ob_get_clean();        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('jumbotron', $context['__placeholder_jumbotron_default_contents']);
        unset($context['__placeholder_jumbotron_default_contents']);        // line 11
        echo "\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "F:\\OpenServer\\domains\\olblog/themes/hambern-hambern-blank-bootstrap-4/partials/jumbotron.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  32 => 4,  25 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"jumbotron\" class=\"m-t-3\">
\t<div class=\"jumbotron\">
\t\t<div class=\"container text-xs-center\">
\t\t\t{% placeholder jumbotron default %}
\t\t\t<h1 class=\"display-3\">Ol BLog</h1>
\t\t\t<p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, porro, corporis, repellendus, quod a delectus voluptas quas aliquam itaque exercitationem nam culpa doloremque sunt cumque magni fuga nemo amet quo.</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more</a>
\t\t\t</p>
\t\t\t{% endplaceholder %}
\t\t</div>
\t</div>
</section>", "F:\\OpenServer\\domains\\olblog/themes/hambern-hambern-blank-bootstrap-4/partials/jumbotron.htm", "");
    }
}
