<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_9e82fc96aef4e6fa3c5347eef4aa12caf92be36eaff438db3f89e3c53fe321e7 extends Twig_Template
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
        $__internal_b739fd9f0188f1c2e7e433c95ddaf2afd7594845dfde601a46a8eb60b27f6624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b739fd9f0188f1c2e7e433c95ddaf2afd7594845dfde601a46a8eb60b27f6624->enter($__internal_b739fd9f0188f1c2e7e433c95ddaf2afd7594845dfde601a46a8eb60b27f6624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_df543b8a6c141f365b46b3b24b428629f7e2ecc0e7f42a41898e8cd154ca6830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df543b8a6c141f365b46b3b24b428629f7e2ecc0e7f42a41898e8cd154ca6830->enter($__internal_df543b8a6c141f365b46b3b24b428629f7e2ecc0e7f42a41898e8cd154ca6830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b739fd9f0188f1c2e7e433c95ddaf2afd7594845dfde601a46a8eb60b27f6624->leave($__internal_b739fd9f0188f1c2e7e433c95ddaf2afd7594845dfde601a46a8eb60b27f6624_prof);

        
        $__internal_df543b8a6c141f365b46b3b24b428629f7e2ecc0e7f42a41898e8cd154ca6830->leave($__internal_df543b8a6c141f365b46b3b24b428629f7e2ecc0e7f42a41898e8cd154ca6830_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
