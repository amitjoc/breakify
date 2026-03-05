<?php

namespace LineBreak;

final class Breakify
{
    /** @var string Internal buffer */
    private string $output = '';

    /** @var string CLI newline – always PHP_EOL */
    private string $newLine = PHP_EOL;

    /** @var string HTML break tag */
    private string $brTag = '<br>';

    /** @var string HTML horizontal tag */
    private string $hrTag = "<hr />";

    /** @var string cli tab */
    private string $tab = "\t";

    /** @var int Current indentation level (spaces) */
    private int $indentLevel = 0;

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
