<!DOCTYPE html>
<html class="sapCpRuntime" lang="es">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="./sapContentPage.css">
    <script src="./sapContentPage.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <title>Agenda taller</title>
</head>

<body class="sapCpBody cuerpo" style="padding-bottom: 40px;">
    <form action="integrationScript.php" method="POST"
        id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage"
        data-sap-cp-key="4D861AB588C702C4A01B7F0DBEAAF2D4B06FD66D"
        class="sapCpContentPage sapCRLPage sapCpContentPageLoading formulario" data-sap-cp-lpkey="" data-sap-cp-prefill-data="true"
        data-sap-cp-progres-enabled="false" data-sap-cp-version="20.0.5">

        <div style="display: flex; justify-content: center; margin-bottom: 50px;">
            <img src="./assets/5774fcbd-8e46-4be1-babf-ea0d892eb853.png" style="width: 200px;">
        </div>

        <div class="contenedor-btn">
            <h5 class="instrucciones" style="font-size: 15pt; text-align:center;"> Confirma tu hora completando el siguiente formulario</h5>
        </div>

        <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L"
            data-sap-cp-key="141879550503ABEFD923F9E014C843CBC03CC139"
            class="sapCpLayout sapCRLLayout sapCRLLayoutVertical">

            
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-0W"
                data-sap-cp-key="FB7F3AC6A6F1F388F5DE1F5C9C5646048C4D6C24"
                class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpWidgetMandatory sapCpContactAttribute-SMTP_ADDR"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    ><label id="__label116" class="sapCpLabel sapCpLabelRequired input-lbl "
                        for="__input65">Correo electr??nico</label></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <input id="__input65" class="sapCpInput txt-input" type="email" required="required" maxlength="241"
                        data-sap-cp-validationmessage="La direcci??n de correo electr??nico debe tener @ y un punto, por ejemplo: usuario@ejemplo.com">
                </div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            

            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-1W"
                data-sap-cp-key="96CF8B8A601882F02E73B31A7253C33326ACB144"
                class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpWidgetMandatory sapCpContactAttribute-TELNR_MOBILE"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    ><label id="__label117" class="sapCpLabel sapCpLabelRequired input-lbl"
                        for="__input66">Tel??fono celular</label></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <input id="__input66" class="sapCpInput txt-input" type="tel" required="required" maxlength="30"
                        data-sap-cp-validationmessage="El n??mero de tel??fono debe tener un s??mbolo de suma (+) y 5 o m??s d??gitos.">
                </div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-2W"
                data-sap-cp-key="FCD669B2995895CBDB0DB1BBF190980AF1BC55C7"
                class="sapCpWidget sapCRLWidget sapCpTextWidget" data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContentNoIndent sapCRLWidgetContentNoIndent instrucciones">
                    <p style="text-align: left">
                        <span>
                        <strong>Seleccione solo una opci??n para su
                                visita a taller agendada
                            </strong>
                        </span>
                    </p>
                </div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-3W"
                data-sap-cp-key="B342BE7C079CC0FD92467D1B51AC1FE2BB28AE04"
                class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpWidgetHidden sapCpCInteractionAttribute-YY1_AGENDAMIENTO_MIA sapCpContactAttribute-"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    ><label id="__label118" class="sapCpLabel" for="__down39">Agendamiento</label>
                </div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <select id="__down39" class="sapCpDropDown">
                        <option label="Confirmar hora para taller" value="101" selected="selected">Confirmar hora para
                            taller</option>
                        <option label=" " value=""> </option>
                    </select></div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-4W"
                data-sap-cp-key="94F0CFC3B7A4FF0646428A5AFC646AF0E38F133F"
                class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpWidgetHidden sapCpCInteractionAttribute-YY1_AGENDAMIENTO_MIA sapCpContactAttribute-"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    ><label id="__label119" class="sapCpLabel" for="__down40">Agendamiento</label>
                </div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <select id="__down40" class="sapCpDropDown">
                        <option label="Reagendar hora para taller" value="102" selected="selected">Reagendar hora para
                            taller</option>
                        <option label=" " value=""> </option>
                    </select></div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-5W"
                data-sap-cp-key="104CA9B376D989C87871176AFED2D514EF785A25"
                class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpWidgetHidden sapCpCInteractionAttribute-YY1_AGENDAMIENTO_MIA sapCpContactAttribute-"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    ><label id="__label120" class="sapCpLabel" for="__down41">Agendamiento</label>
                </div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <select id="__down41" class="sapCpDropDown">
                        <option label="Cancelar hora para taller" value="103" selected="selected">Cancelar hora para
                            taller</option>
                        <option label=" " value=""> </option>
                    </select></div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-6W"
                data-sap-cp-key="406990D5FB9A9B06D5F689D77BD525550DFCB5FE"
                class="sapCpWidget sapCRLWidget sapCpInteractionWidget sapCpCheckBoxElementWidget"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    ></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <div id="__box39" class="sapCpCheckBox radio"><input type="checkbox" class="radio" name="fooby[1][]" value="1"></div><label id="__label121"
                        class="sapCpLabel sapCpLabelRequiredBefore">Confirma hora agenda </label>
                </div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-7W"
                data-sap-cp-key="9B40AE5979D2214695AA5EB45C9B45262D8F9586"
                class="sapCpWidget sapCRLWidget sapCpInteractionWidget sapCpCheckBoxElementWidget"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    ></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <div id="__box40" class="sapCpCheckBox radio"><input type="checkbox" class="radio" name="fooby[1][]" value="1"></div><label id="__label122"
                        class="sapCpLabel sapCpLabelRequiredBefore">Reagendar hora para taller </label>
                </div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-8W"
                data-sap-cp-key="361C7C23208291C4960E40484C1CEA204CE6A962"
                class="sapCpWidget sapCRLWidget sapCpInteractionWidget sapCpCheckBoxElementWidget"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    ></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <div id="__box41" class="sapCpCheckBox radio"><input type="checkbox" class="radio" name="fooby[1][]" value="1"></div><label id="__label123"
                        class="sapCpLabel sapCpLabelRequiredBefore">Cancelar hora taller </label>
                </div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-9W"
                data-sap-cp-key="D2EAAB61D49C5CB6D9EF2CD6B617AD1C0ECBC4F6"
                class="sapCpWidget sapCRLWidget sapCpButtonWidget" data-sap-cp-follow-up-action="01"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    >
                </div>
                <div class="sapCpWidgetContent sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <div class="contenedor-btn">
                        <div class="btn-center">
                            <button id="__button47" class="sapCpButton btn-principal" type="button">Enviar</button>
                        </div>
                    </div>
                    <span id="__text323"
                        class="sapCpText sapCpButtonWidgetExtraText sapCpMissingMandatoryFieldText sapCpMissingMandatoryFieldLabel">Rellene
                        todos los campos correctamente.</span>
                    <span id="__text324"
                        class="sapCpText sapCpButtonWidgetExtraText sapCpErrorMessageText">Se ha producido un error
                        t??cnico.</span>
                    <span id="__text325"
                        class="sapCpText sapCpButtonWidgetExtraText sapCpSuccessMessageText sapCpSuccessMessageLabel">Gracias
                        por confirmar</span>
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
                                                    <span>Cont??ctanos al:</span>
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
                                Copyright ?? 2021 Salfa, Todos los derechos reservados. <br>
                                Usted esta?? recibiendo este correo electro??nico como cliente Salfa. <br>
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
