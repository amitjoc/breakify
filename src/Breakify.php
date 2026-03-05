<?php

namespace LineBreak;

class Breakify
{
    /**
     * this variable is used when we don't know, where a script will be executed in web or cli
     * default is set to PHP_EOL but will get value updated as script execution environment changes
     * value will be updated in constructor
     * @var string
     */
    private string $lineBreak;

    /**
     * cli new line
     * @var string
     */
    private string $nl;

    /**
     * HTML break tag for web output.
     * Used for rendering a <br /> element in output.
     *
     * @var string
     */
    private string $br = "<br />";

    /**
     * Horizontal rule HTML string for web output
     * Used for rendering a <hr /> element in output.
     * @var string
     */
    private string $hr = "<hr />";

    /**
     * cli double new line
     * @var string
     */
    private string $dnl;

    private string $cr = "\r";

    private string $tab = "\t";

    public function __construct()
    {
        $this->lineBreak = $this->nl = PHP_EOL;
        $this->dnl = PHP_EOL . PHP_EOL;

        if (!$this->isCliEnv()) {
            $this->lineBreak = $this->br;
        }
    }

    /**
     * Determines the current execution environment.
     *
     * Checks if the script is running in a web (HTTP) or CLI context,
     * and returns a string representing the environment type.
     *
     * @return string 'web' if running via HTTP, 'cli' if running in command-line interface.
     */
    public function exeEnvType(): string
    {
        return $this->isCliEnv() ? "cli" : "web" ;
    }

    /**
     * Determines if the current script is running in the CLI (Command Line Interface) environment.
     *
     * @return bool True if running via CLI, false otherwise.
     */
    public function isCliEnv(): bool
    {
        return (php_sapi_name() === 'cli');
    }

    /**
     * @return string
     */
    public function getLineBreak(): string
    {
        return $this->lineBreak;
    }

    public function pNewLine(bool $useDoubleNewLine = false)
    {
        echo $useDoubleNewLine ? $this->dnl : $this->nl;
    }

    public function pbr()
    {
        echo $this->br ;
    }

    public function phr()
    {
        echo $this->hr;
    }
    public function phrDashed()
    {
        echo "<hr style='border-style: dashed' />";
    }
    public function phrDotted(): void
    {
        echo "<hr style='border-style: dotted' />";
    }

    public function phrDouble(): void
    {
        echo "<hr style='border-style: double' />";
    }

    public function phrRidge(): void
    {
        echo "<hr style='border-style: ridge' />";
    }

    public function pCarriageReturn()
    {
        echo "\r";
    }

    /**
     * Generate a beep sound on cli environment
     *
     * This works only for cli and its like \a
     * @return void
     */
    public function cliBeep()
    {
        echo chr(7);
    }
}
