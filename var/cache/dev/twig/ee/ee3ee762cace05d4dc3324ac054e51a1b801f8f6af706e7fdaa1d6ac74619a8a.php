<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c6dc804a407f5f31da199d7e77e047a59af06bb530116ff445fea5665f6fe827 extends Twig_Template
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
        $__internal_01032139bda7ccd03688e78518819c0ae63aab098fb6046eb66ee504c1d5fa9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01032139bda7ccd03688e78518819c0ae63aab098fb6046eb66ee504c1d5fa9b->enter($__internal_01032139bda7ccd03688e78518819c0ae63aab098fb6046eb66ee504c1d5fa9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_f743b4117a641efd2a81f58f9cc423d15e93d2ab22a42e2d0e7d9ed679f11e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f743b4117a641efd2a81f58f9cc423d15e93d2ab22a42e2d0e7d9ed679f11e1a->enter($__internal_f743b4117a641efd2a81f58f9cc423d15e93d2ab22a42e2d0e7d9ed679f11e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_01032139bda7ccd03688e78518819c0ae63aab098fb6046eb66ee504c1d5fa9b->leave($__internal_01032139bda7ccd03688e78518819c0ae63aab098fb6046eb66ee504c1d5fa9b_prof);

        
        $__internal_f743b4117a641efd2a81f58f9cc423d15e93d2ab22a42e2d0e7d9ed679f11e1a->leave($__internal_f743b4117a641efd2a81f58f9cc423d15e93d2ab22a42e2d0e7d9ed679f11e1a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
