<?php

/* F:\OpenServer\domains\olblog/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm */
class __TwigTemplate_14f44323dcf97e2acaa78a6f78f0d02d8af639e98393fd165a8ae90031a4b229 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/vendor/bootstrap/dist/css/bootstrap.min.css", 1 => "assets/vendor/font-awesome/css/font-awesome.min.css", 2 => "assets/vendor/animate.css/animate.min.css", 3 => "assets/vendor/plyr/dist/plyr.css"));
        // line 13
        echo "\" rel=\"stylesheet\">
    ";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 15
        echo "
  </head>
  <body>

\t";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "
    ";
        // line 21
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "filename", array()) == "home.htm")) {
            // line 22
            echo "  ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("jumbotron"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "    <br><br>
    ";
        }
        // line 26
        echo "
  <section id=\"page\" class=\"container m-b-3\">
      <div class=\"row\">
      <div class=\"col-md-8\">
           ";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 31
        echo "      </div>
      <div class=\"col-md-4\">
          ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "      </div>
      </div>
  </section>

    <script src=\"";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/vendor/jquery/dist/jquery.min.js", 1 => "assets/vendor/tether/dist/js/tether.min.js", 2 => "assets/vendor/bootstrap/dist/js/bootstrap.min.js", 3 => "assets/vendor/wow/dist/wow.min.js", 4 => "assets/vendor/holderjs/holder.min.js", 5 => "assets/vendor/plyr/dist/plyr.js", 6 => "assets/js/scripts.js"));
        // line 46
        echo "\"></script>
    ";
        // line 47
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 48
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 49
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "F:\\OpenServer\\domains\\olblog/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 49,  97 => 48,  90 => 47,  87 => 46,  85 => 38,  79 => 34,  75 => 33,  71 => 31,  69 => 30,  63 => 26,  59 => 24,  56 => 23,  51 => 22,  49 => 21,  46 => 20,  42 => 19,  36 => 15,  33 => 14,  30 => 13,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"{{ [
      'assets/vendor/bootstrap/dist/css/bootstrap.min.css',
      'assets/vendor/font-awesome/css/font-awesome.min.css',
      'assets/vendor/animate.css/animate.min.css',
      'assets/vendor/plyr/dist/plyr.css'
    ]|theme }}\" rel=\"stylesheet\">
    {% styles %}

  </head>
  <body>

\t{% partial 'navbar' %}

    {% if this.page.filename == 'home.htm' %}
  {% partial 'jumbotron' %}
    {% else %}
    <br><br>
    {% endif %}

  <section id=\"page\" class=\"container m-b-3\">
      <div class=\"row\">
      <div class=\"col-md-8\">
           {% page %}
      </div>
      <div class=\"col-md-4\">
          {% partial 'sidebar' %}
      </div>
      </div>
  </section>

    <script src=\"{{ [
      'assets/vendor/jquery/dist/jquery.min.js',
      'assets/vendor/tether/dist/js/tether.min.js',
      'assets/vendor/bootstrap/dist/js/bootstrap.min.js',
      'assets/vendor/wow/dist/wow.min.js',
      'assets/vendor/holderjs/holder.min.js',
      'assets/vendor/plyr/dist/plyr.js',
      'assets/js/scripts.js'
    ]|theme }}\"></script>
    {% framework extras %}
    {% scripts %}
  </body>
</html>", "F:\\OpenServer\\domains\\olblog/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm", "");
    }
}
