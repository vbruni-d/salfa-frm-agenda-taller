<!DOCTYPE html>
<html class="sapCpRuntime" lang="es">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="./sapContentPage.css">
    <script src="./sapContentPage.js"></script>
    <title>CNFRM_Hora_Taller</title>
</head>

<body class="sapCpBody cuerpo">
    <form id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage" data-sap-cp-key="54041EC36D384B4CAEA012A7026F91B2BE7A4F7E" class="sapCpContentPage sapCRLPage sapCpContentPageLoading formulario" 
        data-sap-cp-lpkey="" data-sap-cp-prefill-data="true" data-sap-cp-progres-enabled="false" data-sap-cp-version="20.0.5"
        action="integrationScript.php" method="POST">
        
        <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L" data-sap-cp-key="43B64AD93BA588CDF0CBB29DF6DE532538436A4B" class="sapCpLayout sapCRLLayout sapCRLLayoutVertical">
            
            <div style="display: flex; justify-content: center; margin-bottom: 50px;">
                <img src="./assets/5774fcbd-8e46-4be1-babf-ea0d892eb853.png" style="width: 200px;">
            </div>

            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-0W" data-sap-cp-key="F893BD56F50A0C441799332E5C2AB7B9B253E51F" class="sapCpWidget sapCRLWidget sapCpTextWidget" data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContentNoIndent sapCRLWidgetContentNoIndent">
                    <p><span style="color: #000080"><strong><span style="font-size: 14pt">Cuenta con una hora agendada para taller próximamente,&nbsp;</span></strong></span><br><span style="color: #000080"><strong><span style="font-size: 14pt">Por favor complete sus datos en el formulario para mantenerse informado.&nbsp;</span></strong></span></p>
                </div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-1W" data-sap-cp-key="E4A13AEAA31960EB67AA290B0B3F70AF4931800A" class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpWidgetMandatory sapCpContactAttribute-YY1_RUT_ENH" data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" ><label id="__label49" class="sapCpLabel sapCpLabelRequired input-lbl" for="__input25">Rut</label></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <input id="__input25" class="sapCpInput txt-input" type="text" required="required" maxlength="10">
                </div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-2W" data-sap-cp-key="2EB1DD60CD3090B9ECCAAC5F6EAF7B07792D5F7B" class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpContactAttribute-TELNR_MOBILE" data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" ><label id="__label50" class="sapCpLabel input-lbl" for="__input26">Teléfono</label></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <input id="__input26" class="sapCpInput txt-input" type="tel" maxlength="30" data-sap-cp-validationmessage="El número de teléfono debe tener un símbolo de suma (+) y 5 o más dígitos.">
                </div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-3W" data-sap-cp-key="9500651F26A62E8A71FEE9C96735879916BFD4E8" class="sapCpWidget sapCRLWidget sapCpTextWidget" data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContentNoIndent sapCRLWidgetContentNoIndent instrucciones">
                    <p><span><strong>Seleccione solo una opción para su visita a taller agendada</strong> </span></p>
                </div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-4W" data-sap-cp-key="302405D5E33CC38787849CE92E8661068C9ECCB3" class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpWidgetHidden sapCpCInteractionAttribute-YY1_AGENDAMIENTO_MIA sapCpContactAttribute-" data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" ><label id="__label51" class="sapCpLabel" for="__down15">Agendamiento</label></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"><select id="__down15" class="sapCpDropDown">
                        <option label="Confirmar hora para taller" value="101" selected="selected">Confirmar hora para taller</option>
                        <option label=" " value=""> </option>
                    </select></div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-5W" data-sap-cp-key="BFDA4F6B4AB5B75031A9E5BB8F9FE1A677B2C2A4" class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpWidgetHidden sapCpCInteractionAttribute-YY1_AGENDAMIENTO_MIA sapCpContactAttribute-" data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"><label id="__label52" class="sapCpLabel" for="__down16">Reagendar hora para taller </label></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"><select id="__down16" class="sapCpDropDown">
                        <option label="Reagendar hora para taller" value="102" selected="selected">Reagendar hora para taller</option>
                        <option label=" " value=""> </option>
                    </select></div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-6W" data-sap-cp-key="38828969AE58B57ED8DEDD9782B632C283D05A8D" class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpWidgetHidden sapCpCInteractionAttribute-YY1_AGENDAMIENTO_MIA sapCpContactAttribute-" data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" ><label id="__label53" class="sapCpLabel" for="__down17">Cancelar hora para taller</label></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"><select id="__down17" class="sapCpDropDown">
                        <option label="Cancelar hora para taller" value="103" selected="selected">Cancelar hora para taller</option>
                        <option label=" " value=""> </option>
                    </select></div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-7W" data-sap-cp-key="EDA564FA942F5A91544E976B6B320E61CE2A0B99" class="sapCpWidget sapCRLWidget sapCpInteractionWidget sapCpCheckBoxElementWidget" data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" ></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <div id="__box15" class="sapCpCheckBox radio"><input type="checkbox"name="fooby[1][]" value="1" class="radio"></div><label id="__label54" class="sapCpLabel sapCpLabelRequiredBefore">Confirmar hora para taller</label>
                </div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-8W" data-sap-cp-key="188C33C73D9A88D88F1A292639A7E792B7991CE3" class="sapCpWidget sapCRLWidget sapCpInteractionWidget sapCpCheckBoxElementWidget" data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" ></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <div id="__box16" class="sapCpCheckBox radio"><input type="checkbox"name="fooby[1][]" value="1" class="radio"></div><label id="__label55" class="sapCpLabel sapCpLabelRequiredBefore">Reagendar hora para taller</label>
                </div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-9W" data-sap-cp-key="0400B82A53B3267D54E9196EF75554967DA0AA3F" class="sapCpWidget sapCRLWidget sapCpInteractionWidget sapCpCheckBoxElementWidget" data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" ></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <div id="__box17" class="sapCpCheckBox radio"><input type="checkbox"name="fooby[1][]" value="1" class="radio"></div><label id="__label56" class="sapCpLabel sapCpLabelRequiredBefore">Cancelar hora para taller</label>
                </div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-10W" data-sap-cp-key="A865AD5BF22AB09659A443F84E115164BF00A29F" class="sapCpWidget sapCRLWidget sapCpButtonWidget" data-sap-cp-follow-up-action="01" data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft contenedor-btn">
                    <button id="__button28" class="sapCpButton btn-principal" type="button">Enviar</button>
                    <span id="__text278" class="sapCpText sapCpButtonWidgetExtraText sapCpMissingMandatoryFieldText sapCpMissingMandatoryFieldLabel">Rellene todos los campos correctamente.</span>
                    <span id="__text279" class="sapCpText sapCpButtonWidgetExtraText sapCpErrorMessageText">Se ha producido un error contactar a soporte: soporte@salfa.cl</span>
                    <span id="__text280" class="sapCpText sapCpButtonWidgetExtraText sapCpSuccessMessageText sapCpSuccessMessageLabel">Gracias por confirmar</span>
                </div>

                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
        </div>


        <div style="min-width: 100%;">
            <img src="assets/7dd2a8da-76a9-4a75-82ba-8fc990870f3c.png" style="width: 100%; object-fit: contain;">

            <div>
                <table class="container" width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="height:auto;max-width:600px;min-width:320px;background-color:#ffffff;">
                    <tbody>
                        <tr>
                            <td style="background-color:#ffffff;padding:3% 5%;" bgcolor="#ffffff">
                                <table class="container" width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="height:auto;max-width:600px;min-width:320px;">
                                    <tbody>
                                        <tr>
                                            <td align="left">
                                                <a href="https://www.facebook.com/Salfachile">
                                                <img src="./assets/1612227d-dd70-4b80-bf9b-a7874ea4f689.png" width="23" alt="Facebook"></a>
                                            </td>
                                            <td align="left">
                                                <a href="https://www.instagram.com/salfachile/">
                                                <img src="./assets/f91d82f8-8a65-46f3-aa5b-545abaf27ad3.png" width="23" alt="Instagram"></a>
                                            </td>
                                            <td align="left">
                                                <a href="https://www.youtube.com/user/SalfaChile">
                                                <img src="./assets/da008e5e-2941-4576-b9f7-8e2df5d0c2a8.png" width="23" alt="Youtube"></a>
                                            </td>

                                            <td width="50%" class="footerSpaceRrss">
                                                &nbsp;
                                            </td>
                                            <td align="right" width="30%">
                                                <img src="./assets/6cc0f022-1988-4738-90a4-4b11c10b2a8b.png" alt="Salfa" width="100" style="margin-right: 20px;">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color:#EDEDED;padding:3% 5%;" bgcolor="#EDEDED">
                                <table class="container" width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="height:auto;max-width:600px;min-width:320px;">
                                    <tbody>
                                        <tr>
                                            <td align="right" width="30%" style="font-family:Arial, Helvetica, sans-serif;font-size:12px;text-align:left;white-space: nowrap;">
                                                Revisa nuestras <br>sucursales: <br>
                                                <a href="https://www.salfa.cl/" style="text-decoration:none;color:#002E5A;">
                                                    <strong style="font-size:18px;">salfa.cl</strong>
                                                </a>
                                            </td>

                                            <td width="60%" class="footerSpace">
                                                &nbsp;
                                            </td>
                                            <td style="font-size:12px;">
                                                <div style="text-align: right; margin-right: 30px !important;">
                                                    <span>Contáctanos al:</span>
                                                </div>
                                                <a href="tel:6003606200" style="text-decoration:none;color:#002E5A;">
                                                    <strong style="font-size:18px; white-space: nowrap; margin-right: 30px;">600 360 6200</strong>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family:Arial, Helvetica, sans-serif;font-size:10px;color:#757575;text-align:center;padding-top:20px;padding-left:30px;padding-right:30px;">
                                <span style="text-transform: uppercase; font-size: 13px;"></span>
                                Copyright © 2021 Salfa, Todos los derechos reservados. <br>
                                Usted está recibiendo este correo electrónico como cliente Salfa. <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>


    </form>
</body>



<script>
    $("input:checkbox").on('click', function() {
      var $box = $(this);
      if ($box.is(":checked")) {
        var group = "input:checkbox[name='" + $box.attr("name") + "']";
        $(group).prop("checked", false);
        $box.prop("checked", true);
      } else {
        $box.prop("checked", false);
      }
    });
</script>



</html>


