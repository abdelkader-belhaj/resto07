<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* contacts/edit.html.twig */
class __TwigTemplate_4cff454965c3095b229b7049aeac7170 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("baseAdmin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier Contact";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "<div class=\"container mt-4\">
    <div class=\"card shadow-sm mx-auto\" style=\"max-width: 500px;\">
        <div class=\"card-header bg-primary text-white\">
            <h2 class=\"mb-0\">Modifier un Contact</h2>
        </div>
        <div class=\"card-body\">
            <form method=\"post\">
                <div class=\"mb-3\">
                    <label class=\"form-label\">Nom :</label>
                    <input type=\"text\" name=\"name\" class=\"form-control\" value=\"";
        // line 13
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "name", [], "any", true, true, false, 13) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "name", [], "any", false, false, false, 13)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true)) : (""));
        yield "\" required>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Email :</label>
                    <input type=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 17
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", true, true, false, 17) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 17)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 17), "html", null, true)) : (""));
        yield "\" required>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Message :</label>
                    <textarea name=\"message\" class=\"form-control\" rows=\"4\" required>";
        // line 21
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "message", [], "any", true, true, false, 21) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "message", [], "any", false, false, false, 21)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "message", [], "any", false, false, false, 21), "html", null, true)) : (""));
        yield "</textarea>
                </div>
                <div class=\"d-flex justify-content-between\">
                    <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_index");
        yield "\" class=\"btn btn-outline-secondary\">Retour</a>
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "contacts/edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  101 => 24,  95 => 21,  88 => 17,  81 => 13,  70 => 4,  63 => 3,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "contacts/edit.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle\\templates\\contacts\\edit.html.twig");
    }
}
