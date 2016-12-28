<?php

/* partials/base.html.twig */
class __TwigTemplate_9722288095d3235fbfc81971e159069a88e70d687ddeda304e756012de429b12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <!-- (1) Optimize for mobile versions: http://goo.gl/EOpFl -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- (1) force latest IE rendering engine: bit.ly/1c8EiC9 -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
        } else {
            echo $this->getAttribute(($context["site"] ?? null), "title", array());
        }
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 11
        echo $this->getAttribute(($context["site"] ?? null), "description", array());
        echo "\" />

    <meta name=\"HandheldFriendly\" content=\"True\" />
    <meta name=\"MobileOptimized\" content=\"320\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">

    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 19
            echo "    <meta ";
            if ($this->getAttribute($context["meta"], "name", array())) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", array())) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", array())) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", array())) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", array())) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", array());
                echo "\" ";
            }
            echo "/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <link rel=\"canonical\" href=\"";
        // line 22
        echo $this->getAttribute(($context["page"] ?? null), "url", array(), "method");
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\">
    <link rel=\"stylesheet\" href=\"http://brick.a.ssl.fastly.net/Linux+Libertine:400,400i,700,700i/Open+Sans:400,400i,700,700i\">

    ";
        // line 27
        echo "    <script src=\"https://use.typekit.net/gmv3lsw.js\"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    ";
        // line 31
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/main.css"), "method");
        // line 32
        echo "    ";
        // line 33
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
</head>
";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $context["home"] = $this->getAttribute(($context["pages"] ?? null), "find", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "home", array()), "alias", array())), "method");
        // line 40
        echo "
    ";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "
    <!-- content start -->

    ";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "    <!-- content end -->


    ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->loadTemplate("partials/javascripts.html.twig", "partials/base.html.twig", 69)->display($context);
        // line 70
        echo "
</body>
</html>
";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "<body>
";
    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        // line 42
        echo "        <a href=\"";
        echo ($context["base_url_relative"] ?? null);
        echo "\" class=\"logo-readium\"><span class=\"logo\" style=\"background-image: url(";
        echo ($context["base_url_relative"] ?? null);
        echo $this->getAttribute(($context["site"] ?? null), "logo", array());
        echo ")\"></span></a>
    ";
    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        // line 48
        echo "    <div class=\"page-content\">
        <div class=\"wrapper\">
            ";
        // line 50
        echo ($context["content"] ?? null);
        echo "
        </div>
    </div>
    ";
    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        // line 58
        echo "    <!-- footer start -->
    <footer class=\"site-footer\">
      <a class=\"subscribe\" href=\"";
        // line 60
        echo ($context["base_url"] ?? null);
        echo "/blog.rss\"> <span class=\"tooltip\"> <i class=\"fa fa-rss\"></i> Subscribe!</span></a>
        <div class=\"inner\">
             <section class=\"copyright\">All content copyright <a href=\"mailto:";
        // line 62
        echo $this->getAttribute(($context["site"] ?? null), "email", array());
        echo "\">";
        echo $this->getAttribute(($context["site"] ?? null), "name", array());
        echo "</a> &copy; ";
        echo twig_date_format_filter($this->env, "now", "Y");
        echo " &bull; All rights reserved.</section>
             <section class=\"poweredby\">Made with <a href=\"http://getgrav.org\"> Grav</a></section>
        </div>
    </footer>
    <!-- footer end -->
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 62,  202 => 60,  198 => 58,  195 => 57,  187 => 50,  183 => 48,  180 => 47,  170 => 42,  167 => 41,  162 => 36,  159 => 35,  152 => 70,  150 => 69,  147 => 68,  145 => 57,  140 => 54,  138 => 47,  133 => 44,  131 => 41,  128 => 40,  126 => 39,  123 => 38,  121 => 35,  115 => 33,  113 => 32,  111 => 31,  105 => 27,  99 => 23,  95 => 22,  92 => 21,  59 => 19,  55 => 18,  45 => 11,  37 => 10,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
    <meta charset=\"utf-8\">
    <!-- (1) Optimize for mobile versions: http://goo.gl/EOpFl -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- (1) force latest IE rendering engine: bit.ly/1c8EiC9 -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>{% if page.title %}{{ page.title }}{% else %}{{ site.title }}{% endif %}</title>
    <meta name=\"description\" content=\"{{ site.description }}\" />

    <meta name=\"HandheldFriendly\" content=\"True\" />
    <meta name=\"MobileOptimized\" content=\"320\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">

    {% for meta in page.metadata %}
    <meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
    {% endfor %}

    <link rel=\"canonical\" href=\"{{ page.url() }}\">
    <link rel=\"shortcut icon\" href=\"{{ theme_url }}/images/favicon.png\">
    <link rel=\"stylesheet\" href=\"http://brick.a.ssl.fastly.net/Linux+Libertine:400,400i,700,700i/Open+Sans:400,400i,700,700i\">

    {# typekit #}
    <script src=\"https://use.typekit.net/gmv3lsw.js\"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    {% do assets.addCss('theme://css/main.css') %}
    {# {% do assets.addCss('theme://css/print.css') %} #}
    {{ assets.css() }}
</head>
{% block body %}
<body>
{% endblock %}

{% set home = pages.find(config.system.home.alias) %}

    {% block header %}
        <a href=\"{{ base_url_relative }}\" class=\"logo-readium\"><span class=\"logo\" style=\"background-image: url({{ base_url_relative }}{{ site.logo }})\"></span></a>
    {% endblock %}

    <!-- content start -->

    {% block content %}
    <div class=\"page-content\">
        <div class=\"wrapper\">
            {{ content }}
        </div>
    </div>
    {% endblock %}
    <!-- content end -->


    {% block footer %}
    <!-- footer start -->
    <footer class=\"site-footer\">
      <a class=\"subscribe\" href=\"{{ base_url }}/blog.rss\"> <span class=\"tooltip\"> <i class=\"fa fa-rss\"></i> Subscribe!</span></a>
        <div class=\"inner\">
             <section class=\"copyright\">All content copyright <a href=\"mailto:{{ site.email}}\">{{ site.name }}</a> &copy; {{ \"now\"|date('Y') }} &bull; All rights reserved.</section>
             <section class=\"poweredby\">Made with <a href=\"http://getgrav.org\"> Grav</a></section>
        </div>
    </footer>
    <!-- footer end -->
    {% endblock %}

{% include 'partials/javascripts.html.twig' %}

</body>
</html>
", "partials/base.html.twig", "/Users/matt/git/alexs-website/user/themes/mediator/templates/partials/base.html.twig");
    }
}
