<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ef42fa3ca301703261e18ef2cacbca5760d8e0cc182fa31bdabdcbf57e03df7b extends Twig_Template
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
        $__internal_e3e869c4cfc156de898da35a0c51f541d0f521de77edab9e4a43c2e7affa976f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e869c4cfc156de898da35a0c51f541d0f521de77edab9e4a43c2e7affa976f->enter($__internal_e3e869c4cfc156de898da35a0c51f541d0f521de77edab9e4a43c2e7affa976f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_696f63a2c2d976dddd7804514f12c746f0e2fe1db21c2bfd3c4c12d30f8c64fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696f63a2c2d976dddd7804514f12c746f0e2fe1db21c2bfd3c4c12d30f8c64fd->enter($__internal_696f63a2c2d976dddd7804514f12c746f0e2fe1db21c2bfd3c4c12d30f8c64fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e3e869c4cfc156de898da35a0c51f541d0f521de77edab9e4a43c2e7affa976f->leave($__internal_e3e869c4cfc156de898da35a0c51f541d0f521de77edab9e4a43c2e7affa976f_prof);

        
        $__internal_696f63a2c2d976dddd7804514f12c746f0e2fe1db21c2bfd3c4c12d30f8c64fd->leave($__internal_696f63a2c2d976dddd7804514f12c746f0e2fe1db21c2bfd3c4c12d30f8c64fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
