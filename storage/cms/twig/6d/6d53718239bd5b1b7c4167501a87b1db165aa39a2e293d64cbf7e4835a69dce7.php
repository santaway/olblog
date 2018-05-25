<?php

/* F:\OpenServer\domains\olblog/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm */
class __TwigTemplate_c77e3f83e10f3ff00556220d33fc05d4dd4b2ef327508e96262eef86e5615d89 extends Twig_Template
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
        echo "<section id=\"navbar\" class=\"m-b-3\">
\t<nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("features");
        echo "\">Ol Blog</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item";
        // line 6
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "home")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("Home");
        echo "\">Главная</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 9
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "about")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\">Обо мне</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 12
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "blog")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\">Блог</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 15
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "contacts")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contacts");
        echo "\">Контакты</a>
\t\t\t\t</li>

\t\t\t</ul>
\t\t</div>
\t</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "F:\\OpenServer\\domains\\olblog/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  56 => 15,  51 => 13,  47 => 12,  42 => 10,  38 => 9,  33 => 7,  29 => 6,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"navbar\" class=\"m-b-3\">
\t<nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"{{ 'features'|page }}\">Ol Blog</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'home' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'Home'|page }}\">Главная</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'about' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'about'|page }}\">Обо мне</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'blog' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'blog'|page }}\">Блог</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'contacts' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'contacts'|page }}\">Контакты</a>
\t\t\t\t</li>

\t\t\t</ul>
\t\t</div>
\t</nav>
</section>", "F:\\OpenServer\\domains\\olblog/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm", "");
    }
}
