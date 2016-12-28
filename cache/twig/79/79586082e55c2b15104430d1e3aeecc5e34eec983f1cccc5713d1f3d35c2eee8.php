<?php

/* partials/javascripts.html.twig */
class __TwigTemplate_10f8b40a6372f93dee651873b5cfc6f4ac2d20a8bf8027611b450a29ddc0af31 extends Twig_Template
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
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 2
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.fitvids.js"), "method");
        // line 3
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/index.js"), "method");
        // line 4
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/readingTime.min.js"), "method");
        // line 5
        echo "
";
        // line 6
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

<script>
(function (\$) {
  \"use strict\";
  \$(document).ready(function(){

    var \$window = \$(window),
    \$image = \$('.post-image-image, .teaserimage-image');
    \$window.on('scroll', function() {
      var top = \$window.scrollTop();

      if (top < 0 || top > 1500) { return; }
      \$image
        .css('transform', 'translate3d(0px, '+top/3+'px, 0px)')
        .css('opacity', 1-Math.max(top/700, 0));
    });
    \$window.trigger('scroll');

    var height = \$('.article-image').height();
    \$('.post-content').css('padding-top', height + 'px');

    \$('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\\//,'') == this.pathname.replace(/^\\//,'')
       && location.hostname == this.hostname) {
        var target = \$(this.hash);
        target = target.length ? target : \$('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          \$('html,body').animate({ scrollTop: target.offset().top }, 500);
          return false;
        }
      }
    });
  });
}(jQuery));
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/javascripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% do assets.add('jquery', 101) %}
{% do assets.addJs('theme://js/jquery.fitvids.js') %}
{% do assets.addJs('theme://js/index.js') %}
{% do assets.addJs('theme://js/readingTime.min.js') %}

{{ assets.js() }}

<script>
(function (\$) {
  \"use strict\";
  \$(document).ready(function(){

    var \$window = \$(window),
    \$image = \$('.post-image-image, .teaserimage-image');
    \$window.on('scroll', function() {
      var top = \$window.scrollTop();

      if (top < 0 || top > 1500) { return; }
      \$image
        .css('transform', 'translate3d(0px, '+top/3+'px, 0px)')
        .css('opacity', 1-Math.max(top/700, 0));
    });
    \$window.trigger('scroll');

    var height = \$('.article-image').height();
    \$('.post-content').css('padding-top', height + 'px');

    \$('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\\//,'') == this.pathname.replace(/^\\//,'')
       && location.hostname == this.hostname) {
        var target = \$(this.hash);
        target = target.length ? target : \$('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          \$('html,body').animate({ scrollTop: target.offset().top }, 500);
          return false;
        }
      }
    });
  });
}(jQuery));
</script>
", "partials/javascripts.html.twig", "/Users/matt/git/alexs-website/user/themes/mediator/templates/partials/javascripts.html.twig");
    }
}
