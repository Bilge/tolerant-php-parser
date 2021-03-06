<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node\Statement;
use PhpParser\Node\StatementNode;
use PhpParser\NodeKind;
use PhpParser\Token;

class EmptyStatement extends StatementNode {
    /** @var Token */
    public $semicolon;

    public function __construct() {
        parent::__construct(NodeKind::EmptyStatement);
    }
}