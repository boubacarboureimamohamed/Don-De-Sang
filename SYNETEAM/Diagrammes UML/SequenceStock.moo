<?xml version="1.0" encoding="UTF-8"?>
<?PowerDesigner AppLocale="UTF16" ID="{D210069E-1E32-4A75-949D-B6CA28DCB268}" Label="" LastModificationDate="1564050415" Name="SequenceStock" Objects="45" Symbols="136" Target="Java" TargetLink="Reference" Type="{18112060-1A4B-11D1-83D9-444553540000}" signature="CLD_OBJECT_MODEL" version="15.1.0.2850"?>
<!-- Veuillez ne pas modifier ce fichier -->

<Model xmlns:a="attribute" xmlns:c="collection" xmlns:o="object">

<o:RootObject Id="o1">
<c:Children>
<o:Model Id="o2">
<a:ObjectID>D210069E-1E32-4A75-949D-B6CA28DCB268</a:ObjectID>
<a:Name>SequenceStock</a:Name>
<a:Code>SequenceStock</a:Code>
<a:CreationDate>1564047533</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564049946</a:ModificationDate>
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
<a:ObjectID>74345866-E5E7-4F77-A072-E71E35D1A4AF</a:ObjectID>
<a:Name>Java</a:Name>
<a:Code>Java</a:Code>
<a:CreationDate>1564047532</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047532</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:TargetStereotype/>
<a:TargetID>0DEDDB90-46E2-45A0-886E-411709DA0DC9</a:TargetID>
<a:TargetClassID>1811206C-1A4B-11D1-83D9-444553540000</a:TargetClassID>
</o:Shortcut>
</c:ObjectLanguage>
<c:ExtendedModelDefinitions>
<o:Shortcut Id="o4">
<a:ObjectID>214AA322-A8E0-4754-8F39-C45DC9FB9C09</a:ObjectID>
<a:Name>WSDL for Java</a:Name>
<a:Code>WSDLJava</a:Code>
<a:CreationDate>1564047533</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047533</a:ModificationDate>
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
<a:ObjectID>F567CB13-8939-48E3-B580-067AB3E05E4C</a:ObjectID>
<a:Name>Gérer les poches de sang, package &lt;&lt; Gestion de stock des poches de sang &gt;&gt;</a:Name>
<a:Code>Gerer_les_poches_de_sang,_package_&lt;&lt;_Gestion_de_stock_des_poches_de_sang_&gt;&gt;</a:Code>
<a:CreationDate>1564047532</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564049946</a:ModificationDate>
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
<a:ModificationDate>1564050415</a:ModificationDate>
<a:Rect>((-21789,-34276), (22163,35028))</a:Rect>
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
<a:CreationDate>1564049946</a:CreationDate>
<a:ModificationDate>1564049986</a:ModificationDate>
<a:Rect>((12562,-14125), (18524,-12525))</a:Rect>
<a:ListOfPoints>((12562,-12525),(16162,-12525),(16162,-14125),(12562,-14125))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o8"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActivationSymbol Ref="o8"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o9"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o10">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047698</a:ModificationDate>
<a:Rect>((-13162,23131), (12562,24602))</a:Rect>
<a:ListOfPoints>((-13162,23356),(12562,23356))</a:ListOfPoints>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSequenceSymbol Ref="o11"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActivationSymbol Ref="o12"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o13"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o14">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047698</a:ModificationDate>
<a:Rect>((-13162,21300), (12563,22846))</a:Rect>
<a:ListOfPoints>((12563,21600),(-13162,21600))</a:ListOfPoints>
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
<o:ActorSequenceSymbol Ref="o11"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o15"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o16">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047698</a:ModificationDate>
<a:Rect>((12562,10175), (18524,11775))</a:Rect>
<a:ListOfPoints>((12562,11775),(16162,11775),(16162,10175),(12562,10175))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:UMLObjectSequenceSymbol Ref="o17"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UMLObjectSequenceSymbol Ref="o17"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o18"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o19">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047698</a:ModificationDate>
<a:Rect>((-13162,14325), (12113,15871))</a:Rect>
<a:ListOfPoints>((12113,14625),(-13162,14625))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o20"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSequenceSymbol Ref="o11"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o21"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o22">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047698</a:ModificationDate>
<a:Rect>((-13162,11850), (12263,13396))</a:Rect>
<a:ListOfPoints>((-13162,12150),(12263,12150))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSequenceSymbol Ref="o11"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActivationSymbol Ref="o20"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o23"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o24">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047698</a:ModificationDate>
<a:Rect>((-13162,6225), (12113,7771))</a:Rect>
<a:ListOfPoints>((12113,6525),(-13162,6525))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o20"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSequenceSymbol Ref="o11"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o25"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o26">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047698</a:ModificationDate>
<a:Rect>((-13162,1425), (12188,2971))</a:Rect>
<a:ListOfPoints>((12188,1725),(-13162,1725))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o20"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSequenceSymbol Ref="o11"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o27"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o28">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047698</a:ModificationDate>
<a:Rect>((-13162,-4310), (12562,-2838))</a:Rect>
<a:ListOfPoints>((-13162,-4085),(12562,-4085))</a:ListOfPoints>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSequenceSymbol Ref="o11"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActivationSymbol Ref="o29"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o30"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o31">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047698</a:ModificationDate>
<a:Rect>((-13162,-5850), (12263,-4304))</a:Rect>
<a:ListOfPoints>((12263,-5550),(-13162,-5550))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>2</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o29"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSequenceSymbol Ref="o11"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o32"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o33">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564049898</a:ModificationDate>
<a:Rect>((-13162,-8229), (12562,-6757))</a:Rect>
<a:ListOfPoints>((-13162,-8004),(12562,-8004))</a:ListOfPoints>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSequenceSymbol Ref="o11"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActivationSymbol Ref="o8"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o34"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o35">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564049898</a:ModificationDate>
<a:Rect>((-13162,-10575), (12113,-9028))</a:Rect>
<a:ListOfPoints>((12113,-10275),(-13162,-10275))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o8"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSequenceSymbol Ref="o11"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o36"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o37">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047698</a:ModificationDate>
<a:Rect>((-13162,-12600), (12562,-11054))</a:Rect>
<a:ListOfPoints>((-13162,-12300),(12562,-12300))</a:ListOfPoints>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSequenceSymbol Ref="o11"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:UMLObjectSequenceSymbol Ref="o17"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o38"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o39">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564049898</a:ModificationDate>
<a:Rect>((-13162,-17325), (12113,-15778))</a:Rect>
<a:ListOfPoints>((12113,-17025),(-13162,-17025))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o8"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSequenceSymbol Ref="o11"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o40"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o41">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564049898</a:ModificationDate>
<a:Rect>((-13162,-20550), (12113,-19003))</a:Rect>
<a:ListOfPoints>((12113,-20250),(-13162,-20250))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o8"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSequenceSymbol Ref="o11"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o42"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o43">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564049922</a:ModificationDate>
<a:Rect>((-13162,-25644), (12562,-24172))</a:Rect>
<a:ListOfPoints>((-13162,-25419),(12562,-25419))</a:ListOfPoints>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSequenceSymbol Ref="o11"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActivationSymbol Ref="o44"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o45"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o46">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564049909</a:ModificationDate>
<a:Rect>((12562,-27700), (18449,-26100))</a:Rect>
<a:ListOfPoints>((12562,-26100),(16162,-26100),(16162,-27700),(12562,-27700))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o44"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActivationSymbol Ref="o44"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o47"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o48">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564049922</a:ModificationDate>
<a:Rect>((-13162,-29175), (12488,-27629))</a:Rect>
<a:ListOfPoints>((12488,-28875),(-13162,-28875))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>2</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActivationSymbol Ref="o44"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSequenceSymbol Ref="o11"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o49"/>
</c:Object>
</o:MessageSymbol>
<o:MessageSymbol Id="o50">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564049146</a:ModificationDate>
<a:CenterTextOffset>(2400, 75)</a:CenterTextOffset>
<a:Rect>((-13162,17250), (12188,18871))</a:Rect>
<a:ListOfPoints>((-13162,17550),(12188,17550))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
BTIM 0 Arial,8,N
ETIM 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSequenceSymbol Ref="o11"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActivationSymbol Ref="o20"/>
</c:DestinationSymbol>
<c:Object>
<o:Message Ref="o51"/>
</c:Object>
</o:MessageSymbol>
<o:RectangleSymbol Id="o52">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047698</a:ModificationDate>
<a:Rect>((-5137,6600), (-5287,6600))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:RectangleSymbol>
<o:ActorSequenceSymbol Id="o11">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047698</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-15562,28575), (-10763,32174))</a:Rect>
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
<o:LifelineSymbol Id="o53">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564049934</a:ModificationDate>
<a:Rect>((-13162,-33900), (-13062,28575))</a:Rect>
<a:ListOfPoints>((-13162,28575),(-13162,-33900))</a:ListOfPoints>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:LineWidth>2</a:LineWidth>
<a:ShadowColor>8421504</a:ShadowColor>
</o:LifelineSymbol>
</c:SlaveSubSymbols>
<c:Object>
<o:Actor Ref="o54"/>
</c:Object>
</o:ActorSequenceSymbol>
<o:UMLObjectSequenceSymbol Id="o17">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047698</a:ModificationDate>
<a:Rect>((10163,28575), (14962,32174))</a:Rect>
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
<o:LifelineSymbol Id="o55">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564049934</a:ModificationDate>
<a:Rect>((12562,-33900), (12662,28575))</a:Rect>
<a:ListOfPoints>((12562,28575),(12562,-33900))</a:ListOfPoints>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>8454016</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>8421504</a:ShadowColor>
</o:LifelineSymbol>
<o:ActivationSymbol Id="o12">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047698</a:ModificationDate>
<a:Rect>((12112,21600), (13012,23366))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>8421504</a:LineColor>
<a:FillColor>12632256</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
</o:ActivationSymbol>
<o:ActivationSymbol Id="o20">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Rect>((12112,-900), (13012,17560))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>12632256</a:LineColor>
<a:FillColor>12632256</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
</o:ActivationSymbol>
<o:ActivationSymbol Id="o29">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047698</a:ModificationDate>
<a:Rect>((12112,-5550), (13012,-4075))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>12632256</a:LineColor>
<a:FillColor>12632256</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
</o:ActivationSymbol>
<o:ActivationSymbol Id="o8">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564049898</a:ModificationDate>
<a:Rect>((12112,-22574), (13012,-9794))</a:Rect>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>12632256</a:LineColor>
<a:FillColor>12632256</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:ManuallyResized>1</a:ManuallyResized>
</o:ActivationSymbol>
<o:ActivationSymbol Id="o44">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564049922</a:ModificationDate>
<a:Rect>((12112,-28875), (13012,-25409))</a:Rect>
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
<o:UMLObject Ref="o56"/>
</c:Object>
</o:UMLObjectSequenceSymbol>
<o:InteractionFragmentSymbol Id="o57">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047698</a:ModificationDate>
<a:RegionConditionPositionList>((5425,300),(5550,525))</a:RegionConditionPositionList>
<a:Rect>((-18412,-32400), (18488,19496))</a:Rect>
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
<o:ActorSequenceSymbol Ref="o11"/>
<o:UMLObjectSequenceSymbol Ref="o17"/>
</c:AttachedLifelines>
<c:Object>
<o:InteractionFragment Ref="o58"/>
</c:Object>
</o:InteractionFragmentSymbol>
<o:InteractionFragmentSymbol Id="o59">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564047698</a:ModificationDate>
<a:RegionConditionPositionList>((4375,525),(4575,525))</a:RegionConditionPositionList>
<a:Rect>((-17062,750), (17362,9298))</a:Rect>
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
<o:ActorSequenceSymbol Ref="o11"/>
<o:UMLObjectSequenceSymbol Ref="o17"/>
</c:AttachedLifelines>
<c:Object>
<o:InteractionFragment Ref="o60"/>
</c:Object>
</o:InteractionFragmentSymbol>
<o:InteractionFragmentSymbol Id="o61">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564049931</a:ModificationDate>
<a:RegionConditionPositionList>((4300,450),(4425,450))</a:RegionConditionPositionList>
<a:Rect>((-16987,-30676), (17137,-6301))</a:Rect>
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
<o:ActorSequenceSymbol Ref="o11"/>
<o:UMLObjectSequenceSymbol Ref="o17"/>
</c:AttachedLifelines>
<c:Object>
<o:InteractionFragment Ref="o62"/>
</c:Object>
</o:InteractionFragmentSymbol>
<o:InteractionFragmentSymbol Id="o63">
<a:CreationDate>1564047691</a:CreationDate>
<a:ModificationDate>1564049898</a:ModificationDate>
<a:RegionConditionPositionList>((2500,300),(2625,300))</a:RegionConditionPositionList>
<a:Rect>((-15712,-21150), (14738,-14850))</a:Rect>
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
<o:ActorSequenceSymbol Ref="o11"/>
<o:UMLObjectSequenceSymbol Ref="o17"/>
</c:AttachedLifelines>
<c:Object>
<o:InteractionFragment Ref="o64"/>
</c:Object>
</o:InteractionFragmentSymbol>
<o:InteractionReferenceSymbol Id="o65">
<a:CreationDate>1564048272</a:CreationDate>
<a:ModificationDate>1564048333</a:ModificationDate>
<a:Rect>((-14886,25201), (14738,27000))</a:Rect>
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
<o:ActorSequenceSymbol Ref="o11"/>
<o:UMLObjectSequenceSymbol Ref="o17"/>
</c:AttachedLifelines>
<c:Object>
<o:InteractionReference Ref="o66"/>
</c:Object>
</o:InteractionReferenceSymbol>
</c:Symbols>
</o:SequenceDiagram>
<o:Shortcut Id="o67">
<a:ObjectID>31063514-0520-4695-86B2-5D77B96EC491</a:ObjectID>
<a:Name>Authentification</a:Name>
<a:Code>Authentification</a:Code>
<a:CreationDate>1564048272</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564048302</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:TargetStereotype/>
<a:TargetID>AF03A258-95C4-470F-B8BC-911AD9A1F525</a:TargetID>
<a:TargetClassID>18112200-1A4B-11D1-83D9-444553540000</a:TargetClassID>
<a:TargetPackagePath>&lt;Modèle&gt;</a:TargetPackagePath>
</o:Shortcut>
</c:SequenceDiagrams>
<c:InteractionReferences>
<o:InteractionReference Id="o66">
<a:ObjectID>31A6D3D9-ADD3-486B-A539-2EF5B4A6C158</a:ObjectID>
<a:CreationDate>1564048272</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564048302</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:ReferencedDiagram>
<o:Shortcut Ref="o67"/>
</c:ReferencedDiagram>
</o:InteractionReference>
</c:InteractionReferences>
<c:InteractionFragments>
<o:InteractionFragment Id="o58">
<a:ObjectID>72503AE7-93C4-4ACF-8025-8552E094E8F7</a:ObjectID>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>19201</a:Size>
<a:FragmentType>alt</a:FragmentType>
<c:Regions>
<o:InteractionFragment Id="o68">
<a:ObjectID>AFDAE3FA-E742-4E24-8CB0-26261F1EB471</a:ObjectID>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564049155</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>20926</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>[ Ajouter poche de sang ]</a:Condition>
</o:InteractionFragment>
<o:InteractionFragment Id="o69">
<a:ObjectID>15E99423-3709-44E0-AB53-DEE651783CE8</a:ObjectID>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564049320</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>30970</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>[ Editer poche de sang ]</a:Condition>
</o:InteractionFragment>
</c:Regions>
</o:InteractionFragment>
<o:InteractionFragment Id="o60">
<a:ObjectID>46EC7D96-D8EB-4C21-906B-C670A5B700C5</a:ObjectID>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>8174</a:Size>
<a:FragmentType>alt</a:FragmentType>
<c:Regions>
<o:InteractionFragment Id="o70">
<a:ObjectID>4147A520-ABB7-47B0-889D-9311761B095B</a:ObjectID>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>3925</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>Données incorrectes</a:Condition>
</o:InteractionFragment>
<o:InteractionFragment Id="o71">
<a:ObjectID>EC412608-18B5-4A44-B27F-E92928A1BBFF</a:ObjectID>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>4624</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>Données correctes</a:Condition>
</o:InteractionFragment>
</c:Regions>
</o:InteractionFragment>
<o:InteractionFragment Id="o62">
<a:ObjectID>4A0E499E-FF91-4553-9FC9-80C1FBCB6A7F</a:ObjectID>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>1000</a:Size>
<a:FragmentType>alt</a:FragmentType>
<c:Regions>
<o:InteractionFragment Id="o72">
<a:ObjectID>934FAFFC-F5F7-47A2-8D83-44B9BAC58FCC</a:ObjectID>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564049909</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>16726</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>Modification</a:Condition>
</o:InteractionFragment>
<o:InteractionFragment Id="o73">
<a:ObjectID>A375B8BA-687B-4F6F-94CB-E90DE28547AA</a:ObjectID>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564049931</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>7649</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>Suppression</a:Condition>
</o:InteractionFragment>
</c:Regions>
</o:InteractionFragment>
<o:InteractionFragment Id="o64">
<a:ObjectID>7EF4C841-9A05-415A-9A74-05925C8FE35B</a:ObjectID>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>1000</a:Size>
<a:FragmentType>alt</a:FragmentType>
<c:Regions>
<o:InteractionFragment Id="o74">
<a:ObjectID>F3B0DFE4-326F-4430-BEF3-9BE736DDD4B8</a:ObjectID>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>2926</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>Données incorrectes </a:Condition>
</o:InteractionFragment>
<o:InteractionFragment Id="o75">
<a:ObjectID>41BC4F49-216C-40E4-AFAB-2949E785034A</a:ObjectID>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564049895</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Size>3074</a:Size>
<a:FragmentType>opt</a:FragmentType>
<a:Condition>Données correctes </a:Condition>
</o:InteractionFragment>
</c:Regions>
</o:InteractionFragment>
</c:InteractionFragments>
<c:Actors>
<o:Actor Id="o54">
<a:ObjectID>732AB3AD-6F02-4531-B1FC-61681EC58400</a:ObjectID>
<a:Name>Laborantin</a:Name>
<a:Code>Laborantin</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564049074</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
</o:Actor>
</c:Actors>
<c:Model.Objects>
<o:UMLObject Id="o56">
<a:ObjectID>F9BCDE75-C84F-43BE-A111-DC4E8FDC9609</a:ObjectID>
<a:Name>Systéme</a:Name>
<a:Code>Systeme</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
</o:UMLObject>
</c:Model.Objects>
<c:Messages>
<o:Message Id="o51">
<a:ObjectID>D8B0FA47-47C4-4624-A6B5-22658ABCF0E7</a:ObjectID>
<a:Name>Demande de formulaire d&#39;ajout</a:Name>
<a:Code>Demande_de_formulaire_d_ajout</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:UMLObject Ref="o56"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o49">
<a:ObjectID>41BA8873-0F4F-41DD-8979-0DC445F45CEB</a:ObjectID>
<a:Name>Opération effectuée avec succés</a:Name>
<a:Code>Operation_effectuee_avec_succes</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:ControlFlow>R</a:ControlFlow>
<c:Object1>
<o:Actor Ref="o54"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o56"/>
</c:Object2>
</o:Message>
<o:Message Id="o47">
<a:ObjectID>96C32AB4-79D7-4DA4-AC79-E82EA2130F56</a:ObjectID>
<a:Name>Traitement</a:Name>
<a:Code>Traitement</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564049635</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Delay>1</a:Delay>
<c:Object1>
<o:UMLObject Ref="o56"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o56"/>
</c:Object2>
</o:Message>
<o:Message Id="o45">
<a:ObjectID>85815069-17BA-42E8-8698-188F9302AE88</a:ObjectID>
<a:Name>Demande de suppression</a:Name>
<a:Code>Demande_de_suppression</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:ControlFlow>C</a:ControlFlow>
<c:Object1>
<o:UMLObject Ref="o56"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o42">
<a:ObjectID>4A003B3E-3D13-491D-B47B-EA26623097E6</a:ObjectID>
<a:Name>Opération effectuée avec succés</a:Name>
<a:Code>Operation_effectuee_avec_succes</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:Actor Ref="o54"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o56"/>
</c:Object2>
</o:Message>
<o:Message Id="o40">
<a:ObjectID>5A11CED0-64C1-463B-91DF-4E3FBF771F30</a:ObjectID>
<a:Name>Message d&#39;erreur</a:Name>
<a:Code>Message_d_erreur</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:Actor Ref="o54"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o56"/>
</c:Object2>
</o:Message>
<o:Message Id="o38">
<a:ObjectID>B817040F-2689-43E9-A501-D2C925C22307</a:ObjectID>
<a:Name>Effectuer la modifcation et valider l&#39;opération</a:Name>
<a:Code>Effectuer_la_modifcation_et_valider_l_operation</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:UMLObject Ref="o56"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o36">
<a:ObjectID>5FACEBA3-B360-472C-A430-FA308E66763C</a:ObjectID>
<a:Name>Formulaire de modification</a:Name>
<a:Code>Formulaire_de_modification</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:Actor Ref="o54"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o56"/>
</c:Object2>
</o:Message>
<o:Message Id="o34">
<a:ObjectID>01B7F17F-ECF0-4CBD-A288-E8DA890695E2</a:ObjectID>
<a:Name>Demande de modification</a:Name>
<a:Code>Demande_de_modification</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:ControlFlow>C</a:ControlFlow>
<c:Object1>
<o:UMLObject Ref="o56"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o32">
<a:ObjectID>C9C094AE-65F8-4A51-A0A7-86FC6C604E42</a:ObjectID>
<a:Name>Information sur la poche de sang</a:Name>
<a:Code>Information_sur_la_poche_de_sang</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564049449</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:ControlFlow>R</a:ControlFlow>
<c:Object1>
<o:Actor Ref="o54"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o56"/>
</c:Object2>
</o:Message>
<o:Message Id="o30">
<a:ObjectID>86E3AAA4-253E-40C7-85C9-A1E0D6CD2353</a:ObjectID>
<a:Name>Demande d&#39;édition</a:Name>
<a:Code>Demande_d_edition</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:ControlFlow>C</a:ControlFlow>
<c:Object1>
<o:UMLObject Ref="o56"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o27">
<a:ObjectID>0673DCCA-590E-4263-99F2-3306AE23CE14</a:ObjectID>
<a:Name>Opération effectuées avec succés</a:Name>
<a:Code>Operation_effectuees_avec_succes</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:Actor Ref="o54"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o56"/>
</c:Object2>
</o:Message>
<o:Message Id="o25">
<a:ObjectID>07E943A4-265A-4D15-BD76-605F512DEAF1</a:ObjectID>
<a:Name>Message d&#39;erreur</a:Name>
<a:Code>Message_d_erreur</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:Actor Ref="o54"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o56"/>
</c:Object2>
</o:Message>
<o:Message Id="o23">
<a:ObjectID>655825F3-468A-4CBE-930A-2FA4BE1D5B95</a:ObjectID>
<a:Name>Saisir les informations et valider l&#39;opération</a:Name>
<a:Code>Saisir_les_informations_et_valider_l_operation</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:UMLObject Ref="o56"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o21">
<a:ObjectID>52F9BF68-3CE9-4436-A8AC-38B05D74CF19</a:ObjectID>
<a:Name>Formulaire d&#39;ajout</a:Name>
<a:Code>Formulaire_d_ajout</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<c:Object1>
<o:Actor Ref="o54"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o56"/>
</c:Object2>
</o:Message>
<o:Message Id="o18">
<a:ObjectID>2702B88E-6B35-424D-8E8B-BE2EA7EA50B8</a:ObjectID>
<a:Name>Vérification</a:Name>
<a:Code>Verification</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047692</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Delay>1</a:Delay>
<c:Object1>
<o:UMLObject Ref="o56"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o56"/>
</c:Object2>
</o:Message>
<o:Message Id="o15">
<a:ObjectID>DD99EE55-24ED-4082-B0E9-B45DA15E7E6A</a:ObjectID>
<a:Name>Liste des  poches de sang</a:Name>
<a:Code>Liste_des__poches_de_sang</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564049108</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:ControlFlow>R</a:ControlFlow>
<c:Object1>
<o:Actor Ref="o54"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o56"/>
</c:Object2>
</o:Message>
<o:Message Id="o13">
<a:ObjectID>AA3D5CA0-7652-4845-9014-E64E48F77EF0</a:ObjectID>
<a:Name>Demande de gérer les poches de sang</a:Name>
<a:Code>Demande_de_gerer_les_poches_de_sang</a:Code>
<a:CreationDate>1564047691</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564049095</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:ControlFlow>C</a:ControlFlow>
<c:Object1>
<o:UMLObject Ref="o56"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o54"/>
</c:Object2>
</o:Message>
<o:Message Id="o9">
<a:ObjectID>1DC60AD8-E2A2-4A48-BE8B-562C75FCD054</a:ObjectID>
<a:Name>Vérification</a:Name>
<a:Code>Verification</a:Code>
<a:CreationDate>1564049946</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564049976</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:Delay>1</a:Delay>
<c:Object1>
<o:UMLObject Ref="o56"/>
</c:Object1>
<c:Object2>
<o:UMLObject Ref="o56"/>
</c:Object2>
</o:Message>
</c:Messages>
<c:TargetModels>
<o:TargetModel Id="o76">
<a:ObjectID>4B733BED-F4F1-4463-846E-14346C0CC7AC</a:ObjectID>
<a:Name>Java</a:Name>
<a:Code>Java</a:Code>
<a:CreationDate>1564047532</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047532</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:TargetModelURL>file:///%_OBJLANG%/java5-j2ee14.xol</a:TargetModelURL>
<a:TargetModelID>0DEDDB90-46E2-45A0-886E-411709DA0DC9</a:TargetModelID>
<a:TargetModelClassID>1811206C-1A4B-11D1-83D9-444553540000</a:TargetModelClassID>
<c:SessionShortcuts>
<o:Shortcut Ref="o3"/>
</c:SessionShortcuts>
</o:TargetModel>
<o:TargetModel Id="o77">
<a:ObjectID>5422A9D5-E717-4100-8EB4-CDB5D6F29AD9</a:ObjectID>
<a:Name>WSDL for Java</a:Name>
<a:Code>WSDLJava</a:Code>
<a:CreationDate>1564047533</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564047533</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:TargetModelURL>file:///%_XEM%/WSDLJ2EE.xem</a:TargetModelURL>
<a:TargetModelID>C8F5F7B2-CF9D-4E98-8301-959BB6E86C8A</a:TargetModelID>
<a:TargetModelClassID>186C8AC3-D3DC-11D3-881C-00508B03C75C</a:TargetModelClassID>
<c:SessionShortcuts>
<o:Shortcut Ref="o4"/>
</c:SessionShortcuts>
</o:TargetModel>
<o:TargetModel Id="o78">
<a:ObjectID>CA072B4D-E21D-41A2-B74C-CD32B0EBD4BE</a:ObjectID>
<a:Name>SequencePlanificationCollecte</a:Name>
<a:Code>SequencePlanificationCollecte</a:Code>
<a:CreationDate>1564048302</a:CreationDate>
<a:Creator>BOUBACAR BOUREIMA</a:Creator>
<a:ModificationDate>1564048302</a:ModificationDate>
<a:Modifier>BOUBACAR BOUREIMA</a:Modifier>
<a:TargetModelURL>file:///C|/Users/BOUBACAR BOUREIMA/Desktop/Diagrammes UML/SequenceGestionDonneur.moo</a:TargetModelURL>
<a:TargetModelID>ED6E16A4-4502-4B04-A0D3-C297345F3419</a:TargetModelID>
<a:TargetModelClassID>18112060-1A4B-11D1-83D9-444553540000</a:TargetModelClassID>
<c:SessionShortcuts>
<o:Shortcut Ref="o67"/>
</c:SessionShortcuts>
</o:TargetModel>
</c:TargetModels>
</o:Model>
</c:Children>
</o:RootObject>

</Model>