<?php

/* PrestaShopBundle:Admin/Module/Includes:modal_read_more.html.twig */
class __TwigTemplate_89f291bc4bedf679c6ee66cbf00e33f85b33e9096c683d01fe2941f7bc0d699a extends Twig_Template
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
        // line 25
        echo "<div id=\"module-modal-read-more-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "name", array()), "html", null, true);
        echo twig_escape_filter($this->env, ((array_key_exists("additionalModalSuffix", $context)) ? (_twig_default_filter((isset($context["additionalModalSuffix"]) ? $context["additionalModalSuffix"] : null), "")) : ("")), "html", null, true);
        echo "\" class=\"modal modal-vcenter modal-read-more ps-modal-card fade\" role=\"dialog\">

</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:modal_read_more.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Module/Includes:modal_read_more.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Module/Includes/modal_read_more.html.twig");
    }
}
