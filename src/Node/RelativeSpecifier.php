<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node;

use PhpParser\Node;
use PhpParser\NodeKind;
use PhpParser\Token;

class RelativeSpecifier extends Node {
    /** @var Token */
    public $namespaceKeyword;

    /** @var Token */
    public $backslash;

    public function __construct() {
        parent::__construct(NodeKind::RelativeSpecifier);
    }
}