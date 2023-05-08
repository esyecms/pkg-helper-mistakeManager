<?php

namespace Engine\Helper\MistakeManager;

class MistakeManager
{
    private $throwable;

    private $view;

    public function __construct($throwable = null)
    {
        if (isset($throwable)) {
            $this->throwable = $throwable;
            $this->printError();
        }
    }

    private function printError()
    {
        echo '
        <style>
            *{
                padding:0;
                margin:0;
                box-sizing:border-box;
                font-family:sans-serif;
                font-size:14px;
            }

            body{
                
            }

            .errorBox{
                width:calc(100% - 6em);
                margin:3em;
                height:auto;
                border-radius:0.25em;
                border:1px solid #E7E7E7;
            }

            .errorBox__header{
                padding:1em 2em;
                border-bottom:1px solid #E7E7E7;
                background:#F0F0F0;
            }

            .errorBox__content{
                padding:2em;
            }

            .errorBox__content{
                padding:2em;
            }

            .errorBox__content td{
                padding:0.5em;
            }
        </style>

        <div class="errorBox">
            <div class="errorBox__header">
                <h3>Engine was stopped.</h3>
            </div>
            <div class="errorBox__content">
                <table>
                <tbody>
                    <tr>
                        <td><strong>Message: </strong></td>
                        <td>' . $this->throwable->getMessage() . '</td>
                    </tr>
                    <tr>
                        <td><strong>Code: </strong></td>
                        <td>' . $this->throwable->getCode() . '</td>
                    </tr>
                    <tr>
                        <td><strong>File: </strong></td>
                        <td>' . $this->throwable->getFile() . '</td>
                    </tr>
                    <tr>
                        <td><strong>Line: </strong></td>
                        <td>' . $this->throwable->getLine() . '</td>
                    </tr>
                </tbody>
                </table>
            </div>
            <div class="errorBox__footer"></div>
        </div>
        ';
        exit();
    }
}
