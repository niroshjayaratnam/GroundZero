<?php

/* VolunteerManagementSystemPagesBundle:Admin:management.html.twig */
class __TwigTemplate_2bf08900c5ab995812bfee29eb74acad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Volma - Admin Management";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<section class=\"container\">
    <div class=\"notify\">
        <h1>Promote Volunteers</h1>
         ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'errors');
        echo "
        <p align=\"center\">

";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "id"), 'label');
        echo "<br>
";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "id"), 'widget');
        echo "

            <br><br>
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "submit"), 'widget');
        echo "
                  ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'form_end');
        echo "
        </p>
    </div></section>

<section class=\"container\">
    <div class=\"notify\">
        <h1>Demote Administrators</h1>
             ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_start');
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'errors');
        echo "
        <p align=\"center\">

";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "id"), 'label');
        echo "<br>
";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "id"), 'widget');
        echo "
            <br><br>
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "submit"), 'widget');
        echo "
                      ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_end');
        echo "
        </p>
    </div></section>
<section class=\"container\">
    <div class=\"notify\">
        <h1>Project Report</h1>
 ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'form_start');
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'errors');
        echo "
        <p align=\"center\">

";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "name"), 'label');
        echo "<br>
";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "name"), 'widget');
        echo "
            <br><br>
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "submit"), 'widget');
        echo "
                      ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'form_end');
        echo "
        </p>
    </div></section>
<section class=\"container\">
    <div class=\"notify\">
        <h1>Volunteer Report</h1>
 ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), 'form_start');
        echo "
        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), 'errors');
        echo "
        <p align=\"center\">

";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), "id"), 'label');
        echo "<br>
";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), "id"), 'widget');
        echo "
            <br><br>
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), "submit"), 'widget');
        echo "
                      ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form4"]) ? $context["form4"] : $this->getContext($context, "form4")), 'form_end');
        echo "
        </p>
    </div></section>
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:Admin:management.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 61,  161 => 60,  156 => 58,  152 => 57,  146 => 54,  142 => 53,  133 => 47,  129 => 46,  124 => 44,  120 => 43,  114 => 40,  110 => 39,  101 => 33,  97 => 32,  92 => 30,  88 => 29,  82 => 26,  78 => 25,  68 => 18,  64 => 17,  58 => 14,  54 => 13,  48 => 10,  44 => 9,  38 => 5,  35 => 4,  29 => 2,);
    }
}
