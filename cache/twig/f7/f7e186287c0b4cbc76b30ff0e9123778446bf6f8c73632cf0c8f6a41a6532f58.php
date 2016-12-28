<?php

/* post.html.twig */
class __TwigTemplate_80960559db435b81d161eb0085955155f2991e41f4f8c7b55e67f400ed8e5229 extends Twig_Template
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
        $this->loadTemplate("post.html.twig", "post.html.twig", 1, "18509345")->display($context);
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

{% block body %}
<body itemscope itemtype=\"http://schema.org/Article\">
{% endblock %}

{% block content %}
    <main class=\"content {{ page.header.image ? 'tag-articleimage' : '' }}\" role=\"main\">
      <article class=\"post\">
        {% if page.header.image %}
        <div class=\"article-image\">
          <div class=\"post-image-image\" style=\"background-image: url({% if page.header.image %}{{ page.media[page.header.image].url }}{% endif %})\">
            Article Image
          </div>
          {% include 'partials/postmeta.html.twig' %}
        </div>
        {% else %}
        <div class=\"noarticleimage\">
          {% include 'partials/postmeta.html.twig' %}
        </div>
        <br>
        <br>
        <br>
        {% endif %}
        <section class=\"post-content\">
          {% if page.template == 'post' %}
          <div class=\"post-reading\">
            <span class=\"post-reading-time\"></span> read
          </div>
          {% endif %}
          <a name=\"topofpage\"></a>
          {{ content }}
        </section>

        {% if page.template == 'post' %}
        <footer class=\"post-footer\">
          <section class=\"share\">
            {% for social in site.social %}
              {% if social.share_url != null %}
                <a class=\"icon-{{ social.icon }}\" href=\"{{ social.share_url }}{{ social.share_title }}{{page.title | escape}}{{ social.share_link }}{{site.url}}{{page.id}}\"
                  onclick=\"window.open(this.href, '{{ social.icon }}-share', 'width=550,height=255');return false;\">
                <i class=\"fa fa-{{ social.icon }}\"></i><span class=\"hidden\">{{ social.icon }}</span>
                </a>
              {% endif %}
            {% endfor %}
          </section>
        </footer>
        <div class=\"bottom-teaser cf\">
          <div class=\"isLeft\">
            <h5 class=\"index-headline featured\"><span>Written by</span></h5>
            <section class=\"author\">
              <div class=\"author-image\" style=\"background-image: url({{ base_url }}{{site.author.image}})\">Blog Logo</div>
              <h4>{{ site.author.name }}</h4>
              <p class=\"bio\">{{site.author.bio}}</p>
              <hr>
              <p class=\"published\">Published <time datetime=\"{{ page.date | date(site.date_short) }}\">{{ page.date | date(site.date_short) }}</time></p>
            </section>
          </div>
          {# {{/post}} #}
          <div class=\"isRight\">
            <h5 class=\"index-headline featured\"><span>Supported by</span></h5>
            <footer class=\"site-footer\">
              <section class=\"poweredby\">Proudly published with <a href=\"http://getgrav.org\"> Grav</a></section>
              <a class=\"subscribe\" href=\"{{ base_url_relative }}/blog.rss\"> <span class=\"tooltip\"> <i class=\"fa fa-rss\"></i> You should subscribe to my feed.</span></a>
              <div class=\"inner\">
                <section class=\"copyright\">All content copyright <a href=\"{{ base_url_relative }}\">{{site.author.name}}</a> &copy; {{ \"now\"|date('Y') }}<br>All rights reserved.</section>
              </div>
            </footer>
          </div>
        </div>
        {% endif %}

      </article>
    </main>
    <div class=\"bottom-closer\">
      <div class=\"background-closer-image\" {% if home.header.cover %} style=\"background-image: url({{ home.media[home.header.cover].brightness(-75).url }})\"{% endif %}>
        Image
      </div>
      <div class=\"inner\">
        <h1 class=\"blog-title\">{{ site.title }}</h1>
        <h2 class=\"blog-description\">{{ site.description }}</h2>
        <a href=\"{{ home.url }}\" class=\"btn\">Back to Overview</a>
      </div>
    </div>
{% endblock %}

{% block footer %}{% endblock %}

{% endembed %}
", "post.html.twig", "/Users/matt/git/alexs-website/user/themes/mediator/templates/post.html.twig");
    }
}


/* post.html.twig */
class __TwigTemplate_80960559db435b81d161eb0085955155f2991e41f4f8c7b55e67f400ed8e5229_18509345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "post.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<body itemscope itemtype=\"http://schema.org/Article\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <main class=\"content ";
        echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image", array())) ? ("tag-articleimage") : (""));
        echo "\" role=\"main\">
      <article class=\"post\">
        ";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image", array())) {
            // line 11
            echo "        <div class=\"article-image\">
          <div class=\"post-image-image\" style=\"background-image: url(";
            // line 12
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image", array())) {
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image", array()), array(), "array"), "url", array());
            }
            echo ")\">
            Article Image
          </div>
          ";
            // line 15
            $this->loadTemplate("partials/postmeta.html.twig", "post.html.twig", 15)->display($context);
            // line 16
            echo "        </div>
        ";
        } else {
            // line 18
            echo "        <div class=\"noarticleimage\">
          ";
            // line 19
            $this->loadTemplate("partials/postmeta.html.twig", "post.html.twig", 19)->display($context);
            // line 20
            echo "        </div>
        <br>
        <br>
        <br>
        ";
        }
        // line 25
        echo "        <section class=\"post-content\">
          ";
        // line 26
        if (($this->getAttribute(($context["page"] ?? null), "template", array()) == "post")) {
            // line 27
            echo "          <div class=\"post-reading\">
            <span class=\"post-reading-time\"></span> read
          </div>
          ";
        }
        // line 31
        echo "          <a name=\"topofpage\"></a>
          ";
        // line 32
        echo ($context["content"] ?? null);
        echo "
        </section>

        ";
        // line 35
        if (($this->getAttribute(($context["page"] ?? null), "template", array()) == "post")) {
            // line 36
            echo "        <footer class=\"post-footer\">
          <section class=\"share\">
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 39
                echo "              ";
                if (($this->getAttribute($context["social"], "share_url", array()) != null)) {
                    // line 40
                    echo "                <a class=\"icon-";
                    echo $this->getAttribute($context["social"], "icon", array());
                    echo "\" href=\"";
                    echo $this->getAttribute($context["social"], "share_url", array());
                    echo $this->getAttribute($context["social"], "share_title", array());
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", array()));
                    echo $this->getAttribute($context["social"], "share_link", array());
                    echo $this->getAttribute(($context["site"] ?? null), "url", array());
                    echo $this->getAttribute(($context["page"] ?? null), "id", array());
                    echo "\"
                  onclick=\"window.open(this.href, '";
                    // line 41
                    echo $this->getAttribute($context["social"], "icon", array());
                    echo "-share', 'width=550,height=255');return false;\">
                <i class=\"fa fa-";
                    // line 42
                    echo $this->getAttribute($context["social"], "icon", array());
                    echo "\"></i><span class=\"hidden\">";
                    echo $this->getAttribute($context["social"], "icon", array());
                    echo "</span>
                </a>
              ";
                }
                // line 45
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "          </section>
        </footer>
        <div class=\"bottom-teaser cf\">
          <div class=\"isLeft\">
            <h5 class=\"index-headline featured\"><span>Written by</span></h5>
            <section class=\"author\">
              <div class=\"author-image\" style=\"background-image: url(";
            // line 52
            echo ($context["base_url"] ?? null);
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "image", array());
            echo ")\">Blog Logo</div>
              <h4>";
            // line 53
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array());
            echo "</h4>
              <p class=\"bio\">";
            // line 54
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "bio", array());
            echo "</p>
              <hr>
              <p class=\"published\">Published <time datetime=\"";
            // line 56
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), $this->getAttribute(($context["site"] ?? null), "date_short", array()));
            echo "\">";
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), $this->getAttribute(($context["site"] ?? null), "date_short", array()));
            echo "</time></p>
            </section>
          </div>
          ";
            // line 60
            echo "          <div class=\"isRight\">
            <h5 class=\"index-headline featured\"><span>Supported by</span></h5>
            <footer class=\"site-footer\">
              <section class=\"poweredby\">Proudly published with <a href=\"http://getgrav.org\"> Grav</a></section>
              <a class=\"subscribe\" href=\"";
            // line 64
            echo ($context["base_url_relative"] ?? null);
            echo "/blog.rss\"> <span class=\"tooltip\"> <i class=\"fa fa-rss\"></i> You should subscribe to my feed.</span></a>
              <div class=\"inner\">
                <section class=\"copyright\">All content copyright <a href=\"";
            // line 66
            echo ($context["base_url_relative"] ?? null);
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array());
            echo "</a> &copy; ";
            echo twig_date_format_filter($this->env, "now", "Y");
            echo "<br>All rights reserved.</section>
              </div>
            </footer>
          </div>
        </div>
        ";
        }
        // line 72
        echo "
      </article>
    </main>
    <div class=\"bottom-closer\">
      <div class=\"background-closer-image\" ";
        // line 76
        if ($this->getAttribute($this->getAttribute(($context["home"] ?? null), "header", array()), "cover", array())) {
            echo " style=\"background-image: url(";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["home"] ?? null), "media", array()), $this->getAttribute($this->getAttribute(($context["home"] ?? null), "header", array()), "cover", array()), array(), "array"), "brightness", array(0 =>  -75), "method"), "url", array());
            echo ")\"";
        }
        echo ">
        Image
      </div>
      <div class=\"inner\">
        <h1 class=\"blog-title\">";
        // line 80
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</h1>
        <h2 class=\"blog-description\">";
        // line 81
        echo $this->getAttribute(($context["site"] ?? null), "description", array());
        echo "</h2>
        <a href=\"";
        // line 82
        echo $this->getAttribute(($context["home"] ?? null), "url", array());
        echo "\" class=\"btn\">Back to Overview</a>
      </div>
    </div>
";
    }

    // line 87
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 87,  352 => 82,  348 => 81,  344 => 80,  333 => 76,  327 => 72,  314 => 66,  309 => 64,  303 => 60,  295 => 56,  290 => 54,  286 => 53,  281 => 52,  273 => 46,  267 => 45,  259 => 42,  255 => 41,  243 => 40,  240 => 39,  236 => 38,  232 => 36,  230 => 35,  224 => 32,  221 => 31,  215 => 27,  213 => 26,  210 => 25,  203 => 20,  201 => 19,  198 => 18,  194 => 16,  192 => 15,  184 => 12,  181 => 11,  179 => 10,  173 => 8,  170 => 7,  165 => 4,  162 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

{% block body %}
<body itemscope itemtype=\"http://schema.org/Article\">
{% endblock %}

{% block content %}
    <main class=\"content {{ page.header.image ? 'tag-articleimage' : '' }}\" role=\"main\">
      <article class=\"post\">
        {% if page.header.image %}
        <div class=\"article-image\">
          <div class=\"post-image-image\" style=\"background-image: url({% if page.header.image %}{{ page.media[page.header.image].url }}{% endif %})\">
            Article Image
          </div>
          {% include 'partials/postmeta.html.twig' %}
        </div>
        {% else %}
        <div class=\"noarticleimage\">
          {% include 'partials/postmeta.html.twig' %}
        </div>
        <br>
        <br>
        <br>
        {% endif %}
        <section class=\"post-content\">
          {% if page.template == 'post' %}
          <div class=\"post-reading\">
            <span class=\"post-reading-time\"></span> read
          </div>
          {% endif %}
          <a name=\"topofpage\"></a>
          {{ content }}
        </section>

        {% if page.template == 'post' %}
        <footer class=\"post-footer\">
          <section class=\"share\">
            {% for social in site.social %}
              {% if social.share_url != null %}
                <a class=\"icon-{{ social.icon }}\" href=\"{{ social.share_url }}{{ social.share_title }}{{page.title | escape}}{{ social.share_link }}{{site.url}}{{page.id}}\"
                  onclick=\"window.open(this.href, '{{ social.icon }}-share', 'width=550,height=255');return false;\">
                <i class=\"fa fa-{{ social.icon }}\"></i><span class=\"hidden\">{{ social.icon }}</span>
                </a>
              {% endif %}
            {% endfor %}
          </section>
        </footer>
        <div class=\"bottom-teaser cf\">
          <div class=\"isLeft\">
            <h5 class=\"index-headline featured\"><span>Written by</span></h5>
            <section class=\"author\">
              <div class=\"author-image\" style=\"background-image: url({{ base_url }}{{site.author.image}})\">Blog Logo</div>
              <h4>{{ site.author.name }}</h4>
              <p class=\"bio\">{{site.author.bio}}</p>
              <hr>
              <p class=\"published\">Published <time datetime=\"{{ page.date | date(site.date_short) }}\">{{ page.date | date(site.date_short) }}</time></p>
            </section>
          </div>
          {# {{/post}} #}
          <div class=\"isRight\">
            <h5 class=\"index-headline featured\"><span>Supported by</span></h5>
            <footer class=\"site-footer\">
              <section class=\"poweredby\">Proudly published with <a href=\"http://getgrav.org\"> Grav</a></section>
              <a class=\"subscribe\" href=\"{{ base_url_relative }}/blog.rss\"> <span class=\"tooltip\"> <i class=\"fa fa-rss\"></i> You should subscribe to my feed.</span></a>
              <div class=\"inner\">
                <section class=\"copyright\">All content copyright <a href=\"{{ base_url_relative }}\">{{site.author.name}}</a> &copy; {{ \"now\"|date('Y') }}<br>All rights reserved.</section>
              </div>
            </footer>
          </div>
        </div>
        {% endif %}

      </article>
    </main>
    <div class=\"bottom-closer\">
      <div class=\"background-closer-image\" {% if home.header.cover %} style=\"background-image: url({{ home.media[home.header.cover].brightness(-75).url }})\"{% endif %}>
        Image
      </div>
      <div class=\"inner\">
        <h1 class=\"blog-title\">{{ site.title }}</h1>
        <h2 class=\"blog-description\">{{ site.description }}</h2>
        <a href=\"{{ home.url }}\" class=\"btn\">Back to Overview</a>
      </div>
    </div>
{% endblock %}

{% block footer %}{% endblock %}

{% endembed %}
", "post.html.twig", "/Users/matt/git/alexs-website/user/themes/mediator/templates/post.html.twig");
    }
}
