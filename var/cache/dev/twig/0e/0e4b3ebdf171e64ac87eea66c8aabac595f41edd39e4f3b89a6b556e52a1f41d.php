<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a6d066075efa310434df499d6fa7d09ebb45ad85e4044dbbb9acb260b61dd07b extends Twig_Template
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
        $__internal_b38485ec3d96c38aed218a65f30bb36973b4f4d511ec9800d95a43559d3e7411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b38485ec3d96c38aed218a65f30bb36973b4f4d511ec9800d95a43559d3e7411->enter($__internal_b38485ec3d96c38aed218a65f30bb36973b4f4d511ec9800d95a43559d3e7411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_6700cc8b38d02974d19ef8a4554a534ff5f827d047595428559789eb05bbd0c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6700cc8b38d02974d19ef8a4554a534ff5f827d047595428559789eb05bbd0c8->enter($__internal_6700cc8b38d02974d19ef8a4554a534ff5f827d047595428559789eb05bbd0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b38485ec3d96c38aed218a65f30bb36973b4f4d511ec9800d95a43559d3e7411->leave($__internal_b38485ec3d96c38aed218a65f30bb36973b4f4d511ec9800d95a43559d3e7411_prof);

        
        $__internal_6700cc8b38d02974d19ef8a4554a534ff5f827d047595428559789eb05bbd0c8->leave($__internal_6700cc8b38d02974d19ef8a4554a534ff5f827d047595428559789eb05bbd0c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
