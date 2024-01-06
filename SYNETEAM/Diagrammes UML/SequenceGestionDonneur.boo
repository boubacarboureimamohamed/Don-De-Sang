<?xml version="1.0" encoding="UTF-8"?>
<?PowerDesigner AppLocale="UTF16" ID="{ED6E16A4-4502-4B04-A0D3-C297345F3419}" Label="" LastModificationDate="1564048180" Name="SequencePlanificationCollecte" Objects="47" Symbols="61" Target="Java" TargetLink="Reference" Type="{18112060-1A4B-11D1-83D9-444553540000}" signature="CLD_OBJECT_MODEL" version="15.1.0.2850"?>
<!-- Veuillez ne pas modifier ce fichier -->

<Model xmlns:a="attribute" xmlns:c="collection" xmlns:o="object">

<o:RootObject Id="o1">
<c:Children>
<o:Model Id="o2">
<a:ObjectID>ED6E16A4-4502-4B04-A0D3-C297345F3419</a:ObjectID>
<a:Name>SequencePlanificationCollecte</a:Name>
<a:Code>SequencePlanificationCollecte</a:Code>
<a:CreationDate>1564040532</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564046117</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:PackageOptionsText>[FolderOptions]

[FolderOptions\Class Diagram Objects]
GenerationCheckModel=Yes
GenerationPath=
GenerationOptions=
GenerationTasks=
GenerationTargets=
GenerationSelections=</a:PackageOptionsText>
<a:ModelOptionsText>[ModelOptions]

[ModelOptions\Cld]
CaseSensitive=Yes
DisplayName=Yes
EnableTrans=Yes
EnableRequirements=No
ShowClss=No
DeftAttr=int
DeftMthd=int
DeftParm=int
DeftCont=java.util.Collection
DomnDttp=Yes
DomnChck=No
DomnRule=No
SupportDelay=No
PreviewEditable=Yes
AutoRealize=No
DttpFullName=Yes
DeftClssAttrVisi=private
VBNetPreprocessingSymbols=
CSharpPreprocessingSymbols=

[ModelOptions\Cld\NamingOptionsTemplates]

[ModelOptions\Cld\ClssNamingOptions]

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG]

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN]

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS]

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,FirstUpperChar)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDINTF]

[ModelOptions\Cld\ClssNamingOptions\CLDINTF\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,FirstUpperChar)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDINTF\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDACTR]

[ModelOptions\Cld\ClssNamingOptions\UCDACTR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDACTR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS]

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT]

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG]

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP]

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,FirstUpperChar)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDATTR]

[ModelOptions\Cld\ClssNamingOptions\CLDATTR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDATTR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD]

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPARM]

[ModelOptions\Cld\ClssNamingOptions\CLDPARM\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPARM\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPORT]

[ModelOptions\Cld\ClssNamingOptions\OOMPORT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPORT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPART]

[ModelOptions\Cld\ClssNamingOptions\OOMPART\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPART\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDASSC]

[ModelOptions\Cld\ClssNamingOptions\CLDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDASSC]

[ModelOptions\Cld\ClssNamingOptions\UCDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK]

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RQLINK]

[ModelOptions\Cld\ClssNamingOptions\RQLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RQLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK]

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK]

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMACTV]

[ModelOptions\Cld\ClssNamingOptions\OOMACTV\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMACTV\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\ACDOBST]

[ModelOptions\Cld\ClssNamingOptions\ACDOBST\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\ACDOBST\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\STAT]

[ModelOptions\Cld\ClssNamingOptions\STAT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\STAT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDNODE]

[ModelOptions\Cld\ClssNamingOptions\DPDNODE\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDNODE\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI]

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDASSC]

[ModelOptions\Cld\ClssNamingOptions\DPDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMVAR]

[ModelOptions\Cld\ClssNamingOptions\OOMVAR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMVAR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FILO]

[ModelOptions\Cld\ClssNamingOptions\FILO\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=&quot;\/:*?&lt;&gt;|&quot;
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FILO\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_. &quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ]

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMELNK]

[ModelOptions\Cld\ClssNamingOptions\FRMELNK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMELNK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DefaultClass]

[ModelOptions\Cld\ClssNamingOptions\DefaultClass\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DefaultClass\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Generate]

[ModelOptions\Generate\Cdm]
CheckModel=Yes
SaveLinks=Yes
NameToCode=No
Notation=2

[ModelOptions\Generate\Pdm]
CheckModel=Yes
SaveLinks=Yes
ORMapping=No
NameToCode=No
BuildTrgr=No
TablePrefix=
RefrUpdRule=RESTRICT
RefrDelRule=RESTRICT
IndxPKName=%TABLE%_PK
IndxAKName=%TABLE%_AK
IndxFKName=%REFR%_FK
IndxThreshold=
ColnFKName=%.3:PARENT%_%COLUMN%
ColnFKNameUse=No

[ModelOptions\Generate\Xsm]
CheckModel=Yes
SaveLinks=Yes
ORMapping=No
NameToCode=No</a:ModelOptionsText>
<c:ObjectLanguage>
<o:Shortcut Id="o3">
<a:ObjectID>12E266E4-F856-4CAD-A48E-E73F76DDE79C</a:ObjectID>
<a:Name>Java</a:Name>
<a:Code>Java</a:Code>
<a:CreationDate>1564040532</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564040532</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:TargetStereotype/>
<a:TargetID>0DEDDB90-46E2-45A0-886E-411709DA0DC9</a:TargetID>
<a:TargetClassID>1811206C-1A4B-11D1-83D9-444553540000</a:TargetClassID>
</o:Shortcut>
</c:ObjectLanguage>
<c:ExtendedModelDefinitions>
<o:Shortcut Id="o4">
<a:ObjectID>BB9CA261-A6DB-4DA6-BB08-0EE73BA0793B</a:ObjectID>
<a:Name>WSDL for Java</a:Name>
<a:Code>WSDLJava</a:Code>
<a:CreationDate>1564040532</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564040532</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:TargetStereotype/>
<a:TargetID>C8F5F7B2-CF9D-4E98-8301-959BB6E86C8A</a:TargetID>
<a:TargetClassID>186C8AC3-D3DC-11D3-881C-00508B03C75C</a:TargetClassID>
</o:Shortcut>
</c:ExtendedModelDefinitions>
<c:DefaultDiagram>
<o:SequenceDiagram Ref="o5"/>
</c:DefaultDiagram>
<c:SequenceDiagrams>
<o:SequenceDiagram Id="o5">
<a:ObjectID>AF03A258-95C4-470F-B8BC-911AD9A1F525</a:ObjectID>
<a:Name>Authentification</a:Name>
<a:Code>Authentification</a:Code>
<a:CreationDate>1564040532</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564048180</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:DisplayPreferences>[DisplayPreferences]

[DisplayPreferences\SQD]

[DisplayPreferences\General]
Adjust to text=Yes
Snap Grid=No
Constrain Labels=Yes
Display Grid=No
Show Page Delimiter=Yes
Grid size=0
Graphic unit=2
Window color=255, 255, 255
Background image=
Background mode=8
Watermark image=
Watermark mode=8
Show watermark on screen=No
Gradient mode=0
Gradient end color=255, 255, 255
Show Swimlane=No
SwimlaneVert=Yes
TreeVert=No
CompDark=0

[DisplayPreferences\Object]
Mode=0
Trunc Length=80
Word Length=80
Word Text=!&quot;&quot;#$%&amp;&#39;()*+,-./:;&lt;=&gt;?@[\]^_`{|}~
Shortcut IntIcon=Yes
Shortcut IntLoct=Yes
Shortcut IntFullPath=No
Shortcut IntLastPackage=Yes
Shortcut ExtIcon=Yes
Shortcut ExtLoct=No
Shortcut ExtFullPath=No
Shortcut ExtLastPackage=Yes
Shortcut ExtIncludeModl=Yes
EObjShowStrn=Yes
ExtendedObject.Comment=No
ExtendedObject.IconPicture=No
ExtendedObject_SymbolLayout=
ELnkShowStrn=Yes
ELnkShowName=Yes
ExtendedLink_SymbolLayout=
FileObject.Stereotype=No
FileObject.DisplayName=Yes
FileObject.LocationOrName=No
FileObject.IconPicture=No
FileObject.IconMode=Yes
FileObject_SymbolLayout=
PckgShowStrn=Yes
Package.Comment=No
Package.IconPicture=No
Package_SymbolLayout=
Display Model Version=Yes
InteractionSymbol.IconPicture=No
InteractionSymbol_SymbolLayout=
UMLObject.IconPicture=No
UMLObject_SymbolLayout=
ActivationSymbol.IconPicture=No
ActivationSymbol_SymbolLayout=
Actor.IconPicture=No
Actor_SymbolLayout=
InteractionReference.IconPicture=No
InteractionReference_SymbolLayout=
InteractionFragment.IconPicture=No
InteractionFragment_SymbolLayout=
ActrShowStrn=Yes
ObjtShowStrn=Yes
ObjtShowHead=Yes
MssgShowName=Yes
MssgShowStrn=Yes
MssgShowTime=Yes
MssgShowCond=Yes
MssgShowMthd=Yes
MssgShowSign=Yes
MssgShowActv=No
IRefShowStrn=Yes
FragShowLife=Yes
ShowIntrSym=Yes

[DisplayPreferences\Symbol]

[DisplayPreferences\Symbol\FRMEOBJ]
STRNFont=Arial,8,N
STRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
LABLFont=Arial,8,N
LABLFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=6000
Height=2000
Brush color=255 255 255
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=64
Brush gradient color=192 192 192
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 255 128 128
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\FRMELNK]
CENTERFont=Arial,8,N
CENTERFont color=0, 0, 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\FILO]
OBJSTRNFont=Arial,8,N
OBJSTRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
LCNMFont=Arial,8,N
LCNMFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=Yes
Keep center=Yes
Keep size=No
Width=2400
Height=2400
Brush color=255 255 255
Fill Color=No
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 0 0 255
Shadow color=192 192 192
Shadow=-1

[DisplayPreferences\Symbol\CLDPCKG]
STRNFont=Arial,8,N
STRNFont color=0 0 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
LABLFont=Arial,8,N
LABLFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=255 255 192
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 178 178 178
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\SINT]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=22000
Height=28800
Brush color=255 255 255
Fill Color=No
Brush style=4
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 208 208 232
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\SQDOBJT]
OBJSTRNFont=Arial,8,N
OBJSTRNFont color=0 0 0
DISPNAMEFont=Arial,8,U
DISPNAMEFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=233 202 131
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 255 128 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\ACTVSYM]
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=900
Height=2400
Brush color=250 241 211
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 0 0 128
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\UCDACTR]
STRNFont=Arial,8,N
STRNFont color=0 0 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=255 255 192
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\IREF]
STRNFont=Arial,8,N
STRNFont color=0 0 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=250 241 211
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=1031
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 208 208 232
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\IFRG]
KWRDFont=Arial,8,N
KWRDFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=255 255 255
Fill Color=Yes
Brush style=4
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=208 208 232
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 150 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\SQDMSSG]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
BTIMFont=Arial,8,N
BTIMFont color=0 0 0
ETIMFont=Arial,8,N
ETIMFont color=0 0 0
Line style=2
Pen=1 0 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\USRDEPD]
OBJXSTRFont=Arial,8,N
OBJXSTRFont color=0 0 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=2 0 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\Free Symbol]
Free TextFont=Arial,8,N
Free TextFont color=0 0 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 0 0
Shadow color=192 192 192
Shadow=0</a:DisplayPreferences>
<a:PaperSize>(8268, 11693)</a:PaperSize>
<a:PageMargins>((315,354), (433,354))</a:PageMargins>
<a:PageOrientation>1</a:PageOrientation>
<a:PaperSource>7</a:PaperSource>
<c:Symbols>
<o:InteractionSymbol Id="o6">
<a:ModificationDate>1564047773</a:ModificationDate>
<a:Rect>((-21487,-34752), (22013,35324))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:BaseSymbol.Flags>4</a:BaseSymbol.Flags>
<a:LineColor>15257808</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<a:BrushStyle>4</a:BrushStyle>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:SequenceDiagram Ref="o5"/>
</c:Object>
</o:InteractionSymbol>
<o:MessageSymbol Id="o7">
<a:CreationDate>1564046117</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-12937,17400), (12413,18946))</a:Rect>
<a:ListOfPoints>((-12937,17700),(12413,17700))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSequenceSymbol Ref="o8"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActivationSymbol Ref="o9"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o10"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o11">
<a:CreationDate>1564045894</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-12937,-29324), (12713,-27778))</a:Rect>
<a:ListOfPoints>((12713,-29024),(-12937,-29024))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>2</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSequenceSymbol Ref="o8"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o13"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o14">
<a:CreationDate>1564045868</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((12787,-27550), (18749,-25950))</a:Rect>
<a:ListOfPoints>((12787,-25950),(16387,-25950),(16387,-27550),(12787,-27550))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActivationSymbol Ref="o12"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o15"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o16">
<a:CreationDate>1564045844</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-12937,-24505), (12787,-23033))</a:Rect>
<a:ListOfPoints>((-12937,-24280),(12787,-24280))</a:ListOfPoints>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSequenceSymbol Ref="o8"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActivationSymbol Ref="o12"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o17"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o18">
<a:CreationDate>1564045478</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-12937,-18600), (12338,-17053))</a:Rect>
<a:ListOfPoints>((12338,-18300),(-12937,-18300))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o19"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSequenceSymbol Ref="o8"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o20"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o21">
<a:CreationDate>1564045471</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-12937,-15375), (12338,-13828))</a:Rect>
<a:ListOfPoints>((12338,-15075),(-12937,-15075))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o19"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSequenceSymbol Ref="o8"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o22"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o23">
<a:CreationDate>1564045165</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-12937,-12450), (12787,-10904))</a:Rect>
<a:ListOfPoints>((-12937,-12150),(12787,-12150))</a:ListOfPoints>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSequenceSymbol Ref="o8"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UMLObjectSequenceSymbol Ref="o24"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o25"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o26">
<a:CreationDate>1564045107</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-12937,-10425), (12338,-8878))</a:Rect>
<a:ListOfPoints>((12338,-10125),(-12937,-10125))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o19"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSequenceSymbol Ref="o8"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o27"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o28">
<a:CreationDate>1564045097</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-12937,-8671), (12787,-7199))</a:Rect>
<a:ListOfPoints>((-12937,-8446),(12787,-8446))</a:ListOfPoints>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSequenceSymbol Ref="o8"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActivationSymbol Ref="o19"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o29"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o30">
<a:CreationDate>1564044555</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-12937,-5700), (12488,-4154))</a:Rect>
<a:ListOfPoints>((12488,-5400),(-12937,-5400))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>2</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o31"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSequenceSymbol Ref="o8"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o32"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o33">
<a:CreationDate>1564044434</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-12937,-4160), (12787,-2688))</a:Rect>
<a:ListOfPoints>((-12937,-3935),(12787,-3935))</a:ListOfPoints>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSequenceSymbol Ref="o8"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActivationSymbol Ref="o31"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o34"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o35">
<a:CreationDate>1564044182</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-12937,1575), (12413,3121))</a:Rect>
<a:ListOfPoints>((12413,1875),(-12937,1875))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o9"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSequenceSymbol Ref="o8"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o36"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o37">
<a:CreationDate>1564044175</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-12937,6375), (12338,7921))</a:Rect>
<a:ListOfPoints>((12338,6675),(-12937,6675))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o9"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSequenceSymbol Ref="o8"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o38"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o39">
<a:CreationDate>1564043923</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-12937,12000), (12488,13546))</a:Rect>
<a:ListOfPoints>((-12937,12300),(12488,12300))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSequenceSymbol Ref="o8"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActivationSymbol Ref="o9"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o40"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o41">
<a:CreationDate>1564043918</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-12937,14475), (12338,16021))</a:Rect>
<a:ListOfPoints>((12338,14775),(-12937,14775))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o9"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSequenceSymbol Ref="o8"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o42"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o43">
<a:CreationDate>1564043638</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((12787,10325), (18749,11925))</a:Rect>
<a:ListOfPoints>((12787,11925),(16387,11925),(16387,10325),(12787,10325))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UMLObjectSequenceSymbol Ref="o24"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UMLObjectSequenceSymbol Ref="o24"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o44"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o45">
<a:CreationDate>1564042639</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-12937,21450), (12788,22996))</a:Rect>
<a:ListOfPoints>((12788,21750),(-12937,21750))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>2</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o46"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSequenceSymbol Ref="o8"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o47"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o48">
<a:CreationDate>1564042486</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-12937,23281), (12787,24752))</a:Rect>
<a:ListOfPoints>((-12937,23506),(12787,23506))</a:ListOfPoints>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSequenceSymbol Ref="o8"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActivationSymbol Ref="o46"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o49"/>
</c:Object>
</o:MessageSymbol>
<o:RectangleSymbol Id="o50">
<a:CreationDate>1564041892</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-4912,6750), (-5062,6750))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:RectangleSymbol>
<o:ActorSequenceSymbol Id="o8">
<a:CreationDate>1564041557</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-15337,28725), (-10538,32324))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>2</a:LineWidth>
<a:FillColor>0</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:SlaveSubSymbols>
<o:LifelineSymbol Id="o51">
<a:ModificationDate>1564046057</a:ModificationDate>
<a:Rect>((-12937,-33750), (-12837,28725))</a:Rect>
<a:ListOfPoints>((-12937,28725),(-12937,-33750))</a:ListOfPoints>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:LineWidth>2</a:LineWidth>
<a:ShadowColor>8421504</a:ShadowColor>
</o:LifelineSymbol>
</c:SlaveSubSymbols>
<c:Object>
<o:Actor Ref="o52"/>
</c:Object>
</o:ActorSequenceSymbol>
<o:UMLObjectSequenceSymbol Id="o24">
<a:CreationDate>1564041569</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((10388,28725), (15187,32324))</a:Rect>
<a:LineColor>8454016</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>8454016</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>OBJSTRN 0 Arial,8,N
DISPNAME 0 Arial,8,U</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:SlaveSubSymbols>
<o:LifelineSymbol Id="o53">
<a:ModificationDate>1564046057</a:ModificationDate>
<a:Rect>((12787,-33750), (12887,28725))</a:Rect>
<a:ListOfPoints>((12787,28725),(12787,-33750))</a:ListOfPoints>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>8454016</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>8421504</a:ShadowColor>
</o:LifelineSymbol>
<o:ActivationSymbol Id="o46">
<a:CreationDate>1564042486</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((12337,21750), (13237,23516))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>8421504</a:LineColor>
<a:FillColor>12632256</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
</o:ActivationSymbol>
<o:ActivationSymbol Id="o9">
<a:CreationDate>1564043313</a:CreationDate>
<a:ModificationDate>1564046087</a:ModificationDate>
<a:Rect>((12337,-750), (13237,17710))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>12632256</a:LineColor>
<a:FillColor>12632256</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
</o:ActivationSymbol>
<o:ActivationSymbol Id="o31">
<a:CreationDate>1564044434</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((12337,-5400), (13237,-3925))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>12632256</a:LineColor>
<a:FillColor>12632256</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
</o:ActivationSymbol>
<o:ActivationSymbol Id="o19">
<a:CreationDate>1564045097</a:CreationDate>
<a:ModificationDate>1564045601</a:ModificationDate>
<a:Rect>((12337,-19574), (13237,-8436))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>12632256</a:LineColor>
<a:FillColor>12632256</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
</o:ActivationSymbol>
<o:ActivationSymbol Id="o12">
<a:CreationDate>1564045844</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((12337,-29024), (13237,-24270))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>12632256</a:LineColor>
<a:FillColor>12632256</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
</o:ActivationSymbol>
</c:SlaveSubSymbols>
<c:Object>
<o:UMLObject Ref="o54"/>
</c:Object>
</o:UMLObjectSequenceSymbol>
<o:InteractionReferenceSymbol Id="o55">
<a:CreationDate>1564042100</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:Rect>((-14812,25350), (14288,26851))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>15257808</a:LineColor>
<a:FillColor>12632256</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>1031</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:AttachedLifelines>
<o:ActorSequenceSymbol Ref="o8"/>
<o:UMLObjectSequenceSymbol Ref="o24"/>
</c:AttachedLifelines>
<c:Object>
<o:InteractionReference Ref="o56"/>
</c:Object>
</o:InteractionReferenceSymbol>
<o:InteractionFragmentSymbol Id="o57">
<a:CreationDate>1564043036</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:RegionConditionPositionList>((5425,300),(5550,525))</a:RegionConditionPositionList>
<a:Rect>((-18187,-32250), (18713,19646))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>12632256</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>KWRD 0 Arial,8,N</a:FontList>
<a:BrushStyle>4</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>15257808</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:AttachedLifelines>
<o:ActorSequenceSymbol Ref="o8"/>
<o:UMLObjectSequenceSymbol Ref="o24"/>
</c:AttachedLifelines>
<c:Object>
<o:InteractionFragment Ref="o58"/>
</c:Object>
</o:InteractionFragmentSymbol>
<o:InteractionFragmentSymbol Id="o59">
<a:CreationDate>1564044034</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:RegionConditionPositionList>((4375,525),(4575,525))</a:RegionConditionPositionList>
<a:Rect>((-16837,900), (17587,9448))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>12632256</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>KWRD 0 Arial,8,N</a:FontList>
<a:BrushStyle>4</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>15257808</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:AttachedLifelines>
<o:ActorSequenceSymbol Ref="o8"/>
<o:UMLObjectSequenceSymbol Ref="o24"/>
</c:AttachedLifelines>
<c:Object>
<o:InteractionFragment Ref="o60"/>
</c:Object>
</o:InteractionFragmentSymbol>
<o:InteractionFragmentSymbol Id="o61">
<a:CreationDate>1564044720</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:RegionConditionPositionList>((4300,450),(4425,450))</a:RegionConditionPositionList>
<a:Rect>((-16762,-30675), (17362,-6151))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>12632256</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>KWRD 0 Arial,8,N</a:FontList>
<a:BrushStyle>4</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>15257808</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:AttachedLifelines>
<o:ActorSequenceSymbol Ref="o8"/>
<o:UMLObjectSequenceSymbol Ref="o24"/>
</c:AttachedLifelines>
<c:Object>
<o:InteractionFragment Ref="o62"/>
</c:Object>
</o:InteractionFragmentSymbol>
<o:InteractionFragmentSymbol Id="o63">
<a:CreationDate>1564045350</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:RegionConditionPositionList>((2500,300),(2625,300))</a:RegionConditionPositionList>
<a:Rect>((-15187,-19200), (15263,-13048))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>12632256</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>KWRD 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>15257808</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:AttachedLifelines>
<o:ActorSequenceSymbol Ref="o8"/>
<o:UMLObjectSequenceSymbol Ref="o24"/>
</c:AttachedLifelines>
<c:Object>
<o:InteractionFragment Ref="o64"/>
</c:Object>
</o:InteractionFragmentSymbol>
<o:InteractionFragmentSymbol Id="o65">
<a:CreationDate>1564045637</a:CreationDate>
<a:ModificationDate>1564047731</a:ModificationDate>
<a:RegionConditionPositionList>((2500,300),(2625,300))</a:RegionConditionPositionList>
<a:Rect>((-15337,-19200), (15113,-13048))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>12632256</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>KWRD 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>15257808</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
<c:Object>
<o:InteractionFragment Ref="o66"/>
</c:Object>
</o:InteractionFragmentSymbol>
</c:Symbols>
</o:SequenceDiagram>
<o:SequenceDiagram Id="o67">
<a:ObjectID>39E6BD37-29A7-47CD-B3E6-36CC34148D57</a:ObjectID>
<a:Name>DiagrammeSequence_2</a:Name>
<a:Code>DiagrammeSequence_2</a:Code>
<a:CreationDate>1564042153</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564042208</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:DisplayPreferences>[DisplayPreferences]

[DisplayPreferences\SQD]

[DisplayPreferences\General]
Adjust to text=Yes
Snap Grid=No
Constrain Labels=Yes
Display Grid=No
Show Page Delimiter=Yes
Grid size=0
Graphic unit=2
Window color=255, 255, 255
Background image=
Background mode=8
Watermark image=
Watermark mode=8
Show watermark on screen=No
Gradient mode=0
Gradient end color=255, 255, 255
Show Swimlane=No
SwimlaneVert=Yes
TreeVert=No
CompDark=0

[DisplayPreferences\Object]
Mode=0
Trunc Length=80
Word Length=80
Word Text=!&quot;&quot;#$%&amp;&#39;()*+,-./:;&lt;=&gt;?@[\]^_`{|}~
Shortcut IntIcon=Yes
Shortcut IntLoct=Yes
Shortcut IntFullPath=No
Shortcut IntLastPackage=Yes
Shortcut ExtIcon=Yes
Shortcut ExtLoct=No
Shortcut ExtFullPath=No
Shortcut ExtLastPackage=Yes
Shortcut ExtIncludeModl=Yes
EObjShowStrn=Yes
ExtendedObject.Comment=No
ExtendedObject.IconPicture=No
ExtendedObject_SymbolLayout=
ELnkShowStrn=Yes
ELnkShowName=Yes
ExtendedLink_SymbolLayout=
FileObject.Stereotype=No
FileObject.DisplayName=Yes
FileObject.LocationOrName=No
FileObject.IconPicture=No
FileObject.IconMode=Yes
FileObject_SymbolLayout=
PckgShowStrn=Yes
Package.Comment=No
Package.IconPicture=No
Package_SymbolLayout=
Display Model Version=Yes
InteractionSymbol.IconPicture=No
InteractionSymbol_SymbolLayout=
UMLObject.IconPicture=No
UMLObject_SymbolLayout=
ActivationSymbol.IconPicture=No
ActivationSymbol_SymbolLayout=
Actor.IconPicture=No
Actor_SymbolLayout=
InteractionReference.IconPicture=No
InteractionReference_SymbolLayout=
InteractionFragment.IconPicture=No
InteractionFragment_SymbolLayout=
ActrShowStrn=Yes
ObjtShowStrn=Yes
ObjtShowHead=Yes
MssgShowName=Yes
MssgShowStrn=Yes
MssgShowTime=Yes
MssgShowCond=Yes
MssgShowMthd=Yes
MssgShowSign=Yes
MssgShowActv=No
IRefShowStrn=Yes
FragShowLife=Yes
ShowIntrSym=Yes

[DisplayPreferences\Symbol]

[DisplayPreferences\Symbol\FRMEOBJ]
STRNFont=Arial,8,N
STRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
LABLFont=Arial,8,N
LABLFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=6000
Height=2000
Brush color=255 255 255
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=64
Brush gradient color=192 192 192
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 255 128 128
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\FRMELNK]
CENTERFont=Arial,8,N
CENTERFont color=0, 0, 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\FILO]
OBJSTRNFont=Arial,8,N
OBJSTRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
LCNMFont=Arial,8,N
LCNMFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=Yes
Keep center=Yes
Keep size=No
Width=2400
Height=2400
Brush color=255 255 255
Fill Color=No
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 0 0 255
Shadow color=192 192 192
Shadow=-1

[DisplayPreferences\Symbol\CLDPCKG]
STRNFont=Arial,8,N
STRNFont color=0 0 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
LABLFont=Arial,8,N
LABLFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=255 255 192
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 178 178 178
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\SINT]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=22000
Height=28800
Brush color=255 255 255
Fill Color=No
Brush style=4
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 208 208 232
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\SQDOBJT]
OBJSTRNFont=Arial,8,N
OBJSTRNFont color=0 0 0
DISPNAMEFont=Arial,8,U
DISPNAMEFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=233 202 131
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 255 128 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\ACTVSYM]
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=900
Height=2400
Brush color=250 241 211
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 0 0 128
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\UCDACTR]
STRNFont=Arial,8,N
STRNFont color=0 0 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=255 255 192
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\IREF]
STRNFont=Arial,8,N
STRNFont color=0 0 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=250 241 211
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=1031
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 208 208 232
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\IFRG]
KWRDFont=Arial,8,N
KWRDFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=255 255 255
Fill Color=Yes
Brush style=4
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=208 208 232
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 150 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\SQDMSSG]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
BTIMFont=Arial,8,N
BTIMFont color=0 0 0
ETIMFont=Arial,8,N
ETIMFont color=0 0 0
Line style=2
Pen=1 0 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\USRDEPD]
OBJXSTRFont=Arial,8,N
OBJXSTRFont color=0 0 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=2 0 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\Free Symbol]
Free TextFont=Arial,8,N
Free TextFont color=0 0 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 0 0
Shadow color=192 192 192
Shadow=0</a:DisplayPreferences>
<a:PaperSize>(8268, 11693)</a:PaperSize>
<a:PageMargins>((315,354), (433,354))</a:PageMargins>
<a:PageOrientation>1</a:PageOrientation>
<a:PaperSource>7</a:PaperSource>
<c:Symbols>
<o:InteractionSymbol Id="o68">
<a:Rect>((-11000,-14400), (10995,14392))</a:Rect>
<a:BaseSymbol.Flags>4</a:BaseSymbol.Flags>
<a:LineColor>15257808</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<a:BrushStyle>4</a:BrushStyle>
<c:Object>
<o:SequenceDiagram Ref="o67"/>
</c:Object>
</o:InteractionSymbol>
</c:Symbols>
</o:SequenceDiagram>
</c:SequenceDiagrams>
<c:InteractionReferences>
<o:InteractionReference Id="o56">
<a:ObjectID>E86FFA52-A873-4A2B-8F12-B4908ECCCAC1</a:ObjectID>
<a:CreationDate>1564042100</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047928</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:ReferencedDiagram>
<o:SequenceDiagram Ref="o5"/>
</c:ReferencedDiagram>
</o:InteractionReference>
</c:InteractionReferences>
<c:InteractionFragments>
<o:InteractionFragment Id="o58">
<a:ObjectID>E500E67C-755E-4373-BA2C-3C8ACAA71D56</a:ObjectID>
<a:CreationDate>1564043036</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564043079</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>19201</a:Size>
<a:FragmentType>alt</a:FragmentType>
<c:Regions>
<o:InteractionFragment Id="o69">
<a:ObjectID>5C990B69-1BD7-4DD5-A292-254E8D9A1B23</a:ObjectID>
<a:CreationDate>1564043073</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564045036</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>20926</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>[ Ajouter donneur ]</a:Condition>
</o:InteractionFragment>
<o:InteractionFragment Id="o70">
<a:ObjectID>1D3691D5-F8F2-4F21-B8F1-E81888CDC56C</a:ObjectID>
<a:CreationDate>1564043073</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564046030</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>30970</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>[ Editer donneur ]</a:Condition>
</o:InteractionFragment>
</c:Regions>
</o:InteractionFragment>
<o:InteractionFragment Id="o60">
<a:ObjectID>8C252F0A-9B00-4371-B662-6C25F1F841A7</a:ObjectID>
<a:CreationDate>1564044034</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564044060</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>8174</a:Size>
<a:FragmentType>alt</a:FragmentType>
<c:Regions>
<o:InteractionFragment Id="o71">
<a:ObjectID>4C90AAB2-EDFC-440F-821A-B18E3D5BDAA7</a:ObjectID>
<a:CreationDate>1564044060</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564044279</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>3925</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>Données incorrectes</a:Condition>
</o:InteractionFragment>
<o:InteractionFragment Id="o72">
<a:ObjectID>E20FA83E-AF21-4929-868F-F54DA6DCBAE5</a:ObjectID>
<a:CreationDate>1564044060</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564044854</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>4624</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>Données correctes</a:Condition>
</o:InteractionFragment>
</c:Regions>
</o:InteractionFragment>
<o:InteractionFragment Id="o62">
<a:ObjectID>E17FD442-77C1-4F62-A5A0-BF9A7619E936</a:ObjectID>
<a:CreationDate>1564044720</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564044734</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>1000</a:Size>
<a:FragmentType>alt</a:FragmentType>
<c:Regions>
<o:InteractionFragment Id="o73">
<a:ObjectID>BFF5D429-0FC1-408A-A9EA-AF055DC2527C</a:ObjectID>
<a:CreationDate>1564044724</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564045070</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>15151</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>Modification</a:Condition>
</o:InteractionFragment>
<o:InteractionFragment Id="o74">
<a:ObjectID>C3ACEE96-E1FB-4CB3-AD72-655058324980</a:ObjectID>
<a:CreationDate>1564044724</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564046027</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>9373</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>Suppression</a:Condition>
</o:InteractionFragment>
</c:Regions>
</o:InteractionFragment>
<o:InteractionFragment Id="o64">
<a:ObjectID>A25B9D8F-3C71-4741-B758-5067815DC654</a:ObjectID>
<a:CreationDate>1564045350</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564045370</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>1000</a:Size>
<a:FragmentType>alt</a:FragmentType>
<c:Regions>
<o:InteractionFragment Id="o75">
<a:ObjectID>D893FB25-7DD1-4EF3-8551-17F1F60E06AF</a:ObjectID>
<a:CreationDate>1564045360</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564045613</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>2926</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>Données incorrectes </a:Condition>
</o:InteractionFragment>
<o:InteractionFragment Id="o76">
<a:ObjectID>91EFDE6C-DDE4-400D-B8A0-C7688674AE75</a:ObjectID>
<a:CreationDate>1564045360</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564045608</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>3226</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>Données correctes </a:Condition>
</o:InteractionFragment>
</c:Regions>
</o:InteractionFragment>
<o:InteractionFragment Id="o66">
<a:ObjectID>6B4B0322-D2FC-458A-BE04-01DF7F5734DB</a:ObjectID>
<a:CreationDate>1564045637</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564045637</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>1000</a:Size>
<a:FragmentType>alt</a:FragmentType>
<c:Regions>
<o:InteractionFragment Id="o77">
<a:ObjectID>FC0CE0A1-0F78-45C2-BA84-740D17A3C2D8</a:ObjectID>
<a:CreationDate>1564045637</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564045637</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>2926</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>Données incorrectes </a:Condition>
</o:InteractionFragment>
<o:InteractionFragment Id="o78">
<a:ObjectID>003C68AB-72DE-4671-BFD6-0C061F68D585</a:ObjectID>
<a:CreationDate>1564045637</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564045637</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>3226</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>Données correctes </a:Condition>
</o:InteractionFragment>
</c:Regions>
</o:InteractionFragment>
</c:InteractionFragments>
<c:Actors>
<o:Actor Id="o52">
<a:ObjectID>6672E5D6-272B-4FCE-B473-0B3DA2F24ED8</a:ObjectID>
<a:Name>A. Medical</a:Name>
<a:Code>A__Medical</a:Code>
<a:CreationDate>1564041557</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564041627</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
</o:Actor>
</c:Actors>
<c:Model.Objects>
<o:UMLObject Id="o54">
<a:ObjectID>106B84E1-C874-4551-B556-93E90FE9FD94</a:ObjectID>
<a:Name>Systéme</a:Name>
<a:Code>Systeme</a:Code>
<a:CreationDate>1564041569</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564041860</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
</o:UMLObject>
</c:Model.Objects>
<c:Messages>
<o:Message Id="o49">
<a:ObjectID>3938A8D8-16DF-4F5D-9574-9056EAA75A93</a:ObjectID>
<a:Name>Demande de gérer les donneurs</a:Name>
<a:Code>Demande_de_gerer_les_donneurs</a:Code>
<a:CreationDate>1564042486</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564042520</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:ControlFlow>C</a:ControlFlow>
<c:Object1>
<o:UMLObject Ref="o54"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o52"/>
</c:Object2>
</o:Message>
<o:Message Id="o47">
<a:ObjectID>F199CA2A-2D09-4A2D-AB60-05DC257E9EC2</a:ObjectID>
<a:Name>Liste des  donneurs</a:Name>
<a:Code>Liste_des__donneurs</a:Code>
<a:CreationDate>1564042639</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564046558</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:ControlFlow>R</a:ControlFlow>
<c:Object1>
<o:Actor Ref="o52"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o44">
<a:ObjectID>79CCCD16-07F4-4219-8D28-BFD94358938A</a:ObjectID>
<a:Name>Vérification</a:Name>
<a:Code>Verification</a:Code>
<a:CreationDate>1564043638</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564043682</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Delay>1</a:Delay>
<c:Object1>
<o:UMLObject Ref="o54"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o42">
<a:ObjectID>FF34AA6F-CDDC-42B1-BE03-9173092D22C6</a:ObjectID>
<a:Name>Formulaire d&#39;ajout</a:Name>
<a:Code>Formulaire_d_ajout</a:Code>
<a:CreationDate>1564043918</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564043958</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:Actor Ref="o52"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o40">
<a:ObjectID>FEE2E7E4-402D-4545-BC14-A56FFC3B247E</a:ObjectID>
<a:Name>Saisir les informations et valider l&#39;opération</a:Name>
<a:Code>Saisir_les_informations_et_valider_l_operation</a:Code>
<a:CreationDate>1564043923</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564043964</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:UMLObject Ref="o54"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o52"/>
</c:Object2>
</o:Message>
<o:Message Id="o38">
<a:ObjectID>F0BC108A-9E1C-4F9C-A352-8493C4699B98</a:ObjectID>
<a:Name>Message d&#39;erreur</a:Name>
<a:Code>Message_d_erreur</a:Code>
<a:CreationDate>1564044175</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564044216</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:Actor Ref="o52"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o36">
<a:ObjectID>09418064-3D63-4409-8FF0-12E2CD29EC46</a:ObjectID>
<a:Name>Opération effectuées avec succés</a:Name>
<a:Code>Operation_effectuees_avec_succes</a:Code>
<a:CreationDate>1564044182</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564044256</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:Actor Ref="o52"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o34">
<a:ObjectID>FB6F517F-4CC6-49A6-AFEA-3028C929B1D5</a:ObjectID>
<a:Name>Demande d&#39;édition</a:Name>
<a:Code>Demande_d_edition</a:Code>
<a:CreationDate>1564044434</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564044527</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:ControlFlow>C</a:ControlFlow>
<c:Object1>
<o:UMLObject Ref="o54"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o52"/>
</c:Object2>
</o:Message>
<o:Message Id="o32">
<a:ObjectID>0F37480B-42D3-4DBB-8C04-B3A60C3CF9F9</a:ObjectID>
<a:Name>Information sur le donneur</a:Name>
<a:Code>Information_sur_le_donneur</a:Code>
<a:CreationDate>1564044555</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564044582</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:ControlFlow>R</a:ControlFlow>
<c:Object1>
<o:Actor Ref="o52"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o29">
<a:ObjectID>74FCFAC3-09F3-43FA-AD27-C10C25D74314</a:ObjectID>
<a:Name>Demande de modification</a:Name>
<a:Code>Demande_de_modification</a:Code>
<a:CreationDate>1564045097</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564045205</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:ControlFlow>C</a:ControlFlow>
<c:Object1>
<o:UMLObject Ref="o54"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o52"/>
</c:Object2>
</o:Message>
<o:Message Id="o27">
<a:ObjectID>3F769D54-EB0C-4CE2-AEA4-C4820D51D930</a:ObjectID>
<a:Name>Formulaire de modification</a:Name>
<a:Code>Formulaire_de_modification</a:Code>
<a:CreationDate>1564045107</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564045224</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:Actor Ref="o52"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o25">
<a:ObjectID>F361C122-E8F1-49BA-9EEC-CFB97B96C7BB</a:ObjectID>
<a:Name>Effectuer la modifcation et valider l&#39;opération</a:Name>
<a:Code>Effectuer_la_modifcation_et_valider_l_operation</a:Code>
<a:CreationDate>1564045165</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564045253</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:UMLObject Ref="o54"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o52"/>
</c:Object2>
</o:Message>
<o:Message Id="o22">
<a:ObjectID>2A447082-7E04-4088-9A17-85F33005D061</a:ObjectID>
<a:Name>Message d&#39;erreur</a:Name>
<a:Code>Message_d_erreur</a:Code>
<a:CreationDate>1564045471</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564045529</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:Actor Ref="o52"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o20">
<a:ObjectID>7D23143C-3649-4659-AA1F-89DAB8EC02ED</a:ObjectID>
<a:Name>Opération effectuée avec succés</a:Name>
<a:Code>Operation_effectuee_avec_succes</a:Code>
<a:CreationDate>1564045478</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564045570</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:Actor Ref="o52"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o17">
<a:ObjectID>1EE42418-7E31-47B4-861C-B720A89E4606</a:ObjectID>
<a:Name>Demande de suppression</a:Name>
<a:Code>Demande_de_suppression</a:Code>
<a:CreationDate>1564045844</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564045966</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:ControlFlow>C</a:ControlFlow>
<c:Object1>
<o:UMLObject Ref="o54"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o52"/>
</c:Object2>
</o:Message>
<o:Message Id="o15">
<a:ObjectID>9B6E0EBF-7757-4595-AEBD-BDB6D6F49C08</a:ObjectID>
<a:Name>Vérification</a:Name>
<a:Code>Verification</a:Code>
<a:CreationDate>1564045868</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564045943</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Delay>1</a:Delay>
<c:Object1>
<o:UMLObject Ref="o54"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o13">
<a:ObjectID>1BE888DA-C17C-4E5F-B642-EDDA882FDC6C</a:ObjectID>
<a:Name>Opération effectuée avec succés</a:Name>
<a:Code>Operation_effectuee_avec_succes</a:Code>
<a:CreationDate>1564045894</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564045987</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:ControlFlow>R</a:ControlFlow>
<c:Object1>
<o:Actor Ref="o52"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o10">
<a:ObjectID>CF0C0D2E-CA54-419B-B0B1-5637D7E505F7</a:ObjectID>
<a:Name>Demande de formulaire d&#39;ajout</a:Name>
<a:Code>Demande_de_formulaire_d_ajout</a:Code>
<a:CreationDate>1564046117</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564046126</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:UMLObject Ref="o54"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o52"/>
</c:Object2>
</o:Message>
</c:Messages>
<c:TargetModels>
<o:TargetModel Id="o79">
<a:ObjectID>35952A10-3E40-48C0-AFA9-83D5690E694C</a:ObjectID>
<a:Name>Java</a:Name>
<a:Code>Java</a:Code>
<a:CreationDate>1564040532</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564040532</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:TargetModelURL>file:///%_OBJLANG%/java5-j2ee14.xol</a:TargetModelURL>
<a:TargetModelID>0DEDDB90-46E2-45A0-886E-411709DA0DC9</a:TargetModelID>
<a:TargetModelClassID>1811206C-1A4B-11D1-83D9-444553540000</a:TargetModelClassID>
<c:SessionShortcuts>
<o:Shortcut Ref="o3"/>
</c:SessionShortcuts>
</o:TargetModel>
<o:TargetModel Id="o80">
<a:ObjectID>EB26D609-B9FE-4127-8CFD-5DFF311ADFF5</a:ObjectID>
<a:Name>WSDL for Java</a:Name>
<a:Code>WSDLJava</a:Code>
<a:CreationDate>1564040532</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564040532</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:TargetModelURL>file:///%_XEM%/WSDLJ2EE.xem</a:TargetModelURL>
<a:TargetModelID>C8F5F7B2-CF9D-4E98-8301-959BB6E86C8A</a:TargetModelID>
<a:TargetModelClassID>186C8AC3-D3DC-11D3-881C-00508B03C75C</a:TargetModelClassID>
<c:SessionShortcuts>
<o:Shortcut Ref="o4"/>
</c:SessionShortcuts>
</o:TargetModel>
</c:TargetModels>
</o:Model>
</c:Children>
</o:RootObject>

</Model>