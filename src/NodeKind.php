<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser;

class NodeKind {
    const SourceFileNode = 0;
    const ClassNode = 1;
    const BlockNode = 2;
    const CompoundStatementNode = 3;
    const MethodNode = 4;
    const StatementNode = 5;
    const ClassMembersNode = 6;
    const Count = 7;
    const TemplateExpression = 8;
    const EmptyStatement = 9;
    const FunctionNode = 10;
    const DelimitedList = 11;
    const Expression = 12;
    const Name = 13;
    const ParameterNode = 14;
    const QualifiedName = 15;
    const RelativeSpecifier = 16;
    const ScriptSection = 17;
    const NamedLabelStatement = 18;
    const IfStatementNode = 19;
    const ElseIfClauseNode = 20;
    const ElseClauseNode = 21;
    const CaseStatementNode = 22;
    const DefaultStatementNode = 23;
    const SwitchStatementNode = 24;
    const WhileStatementNode = 25;
    const DoWhileStatementNode = 26;
    const ForStatementNode = 27;
    const ForeachStatementNode = 28;
    const ForeachKeyNode = 29;
    const ForeachValueNode = 30;
    const GotoStatementNode = 31;
    const BreakOrContinueStatementNode = 32;
    const ReturnStatement = 33;
    const ThrowStatement = 34;
    const CatchClauseNode = 35;
    const FinallyClauseNode = 36;
    const DeclareStatementNode = 37;
    const DeclareDirectiveNode = 38;
    const Variable = 39;
    const ExpressionStatement = 40;
    const EchoExpression = 41;
//    const Literal = 42;
    const UnknownExpression = 43;
    const ListIntrinsicExpression = 44;
    const ArrayElement = 45;
    const ArrayCreationExpression = 46;
    const EmptyIntrinsicExpression = 47;
    const EvalIntrinsicExpression = 48;
    const ParenthesizedExpression = 49;
    const ExitIntrinsicExpression = 50;
    const PrintIntrinsicExpression = 51;
    const IssetIntrinsicExpression = 52;
    const BinaryExpression = 53;
    const UnaryOpExpression = 54;
    const ErrorControlExpression = 55;
    const PrefixUpdateExpression = 56;
    const SubscriptExpression = 57;
    const MemberAccessExpression = 58;
    const BracedExpression = 59;
    const ArgumentExpression = 60;
    const CallExpression = 61;
    const PostfixUpdateExpression = 62;
    const ScopedPropertyAccessExpression = 63;
    const NumericLiteral = 64;
    const StringLiteral = 65;
    const ObjectCreationExpression = 66;
    const TernaryExpression = 67;
    const ReservedWord = 68;
    const ClassInterfaceClause = 69;
    const ClassBaseClause = 70;
    const ClassConstDeclaration = 71;
    const PropertyDeclaration = 72;
    const MissingMemberDeclaration = 73;
    const InterfaceDeclaration = 74;
    const InterfaceBaseClause = 75;
    const InterfaceMembers = 76;
    const ScriptInclusionExpressoin = 77;
    const NamespaceDefinition = 78;
    const NamespaceUseDeclaration = 79;
    const NamespaceAliasingClause = 80;
    const NamespaceUseGroupClause = 81;
    const TraitMembers = 82;
    const TraitDeclaration = 83;
    const TraitUseClause = 84;
    const TraitSelectOrAliasClause = 85;
    const ConstDeclaration = 86;
    const ConstElement = 87;
    const GlobalDeclaration = 88;
    const FunctionStaticDeclaration = 89;
    const StaticVariableDeclaration = 90;
    const CastExpression = 91;
    const AnonymousFunctionCreationExpression = 92;
    const AnonymousFunctionUseClause = 93;
    const UseVariableName = 94;
    const CloneExpression = 95;
    const AssignmentExpression = 96;
    const InlineHtml = 97;
    const UseVariableNameList = 98;
    const QualifiedNameParts = 99;
    const ParameterDeclarationList = 100;
    const ExpressionList = 101;
    const ArrayElementList = 102;
    const ListExpressionList = 103;
    const QualifiedNameList = 104;
    const ArgumentExpressionList = 105;
    const NamespaceUseGroupClauseList = 106;
    const TraitSelectOrAliasClauseList = 107;
    const VariableNameList = 108;
    const StaticVariableNameList = 109;
    const ConstElementList = 110;
    const UnsetIntrinsicExpression = 111;
}