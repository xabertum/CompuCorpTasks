<?php

/* core/themes/compucorp/templates/page.html.twig */
class __TwigTemplate_141784ff9405e1a65c77739a2645ddf1446b239814d079601df2d2c9f00ab35d extends Twig_Template
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
        $tags = array("if" => 50);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 48
        echo "
<div id=\"page\">
  ";
        // line 50
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "headline", array())) {
            // line 51
            echo "    <section id=\"headline\">
    <div class= \"container\">
      ";
            // line 53
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "headline", array()), "html", null, true));
            echo "
    </div>
    </section> 
    ";
        }
        // line 57
        echo "  <header id=\"header\">
    <div class=\"container\">
        ";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
    </div>
  </header>
  <section id=\"main\">
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"content\" class=\"col-md-9 col-sm-9 col-xs-12\">
                ";
        // line 66
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                <p id=\"prueba\">Adios adios, buena suerte.</p>
                
            </div>
                ";
        // line 70
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array())) {
            // line 71
            echo "            <aside id=\"sidebar\" class=\"sidebar col-md-3 col-sm-3 col-xs-12\">
                 ";
            // line 72
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array()), "html", null, true));
            echo "
            </aside>
                 ";
        }
        // line 75
        echo "        </div>
    </div>
    </section>
  ";
        // line 78
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 79
            echo "    <footer id=\"footer\">
      <div class=\"container\">
        ";
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
      </div>
    </footer>
  ";
        }
        // line 85
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/compucorp/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 85,  103 => 81,  99 => 79,  97 => 78,  92 => 75,  86 => 72,  83 => 71,  81 => 70,  74 => 66,  64 => 59,  60 => 57,  53 => 53,  49 => 51,  47 => 50,  43 => 48,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* */
/* <div id="page">*/
/*   {% if page.headline %}*/
/*     <section id="headline">*/
/*     <div class= "container">*/
/*       {{ page.headline }}*/
/*     </div>*/
/*     </section> */
/*     {% endif %}*/
/*   <header id="header">*/
/*     <div class="container">*/
/*         {{ page.header }}*/
/*     </div>*/
/*   </header>*/
/*   <section id="main">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div id="content" class="col-md-9 col-sm-9 col-xs-12">*/
/*                 {{ page.content }}*/
/*                 <p id="prueba">Adios adios, buena suerte.</p>*/
/*                 */
/*             </div>*/
/*                 {% if page.sidebar %}*/
/*             <aside id="sidebar" class="sidebar col-md-3 col-sm-3 col-xs-12">*/
/*                  {{ page.sidebar}}*/
/*             </aside>*/
/*                  {% endif %}*/
/*         </div>*/
/*     </div>*/
/*     </section>*/
/*   {% if page.footer %}*/
/*     <footer id="footer">*/
/*       <div class="container">*/
/*         {{ page.footer }}*/
/*       </div>*/
/*     </footer>*/
/*   {% endif %}*/
/* </div>*/
/* */
