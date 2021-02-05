$(function() {
    $('#maskcomp').hide();
    $('#maskform').hide();
    $('#maskcv').hide();
    $('#compet1').hide();
    $('#compet2').hide();
    $('#compet3').hide();
    $('#formjs').hide();
    $('#expjs').hide();
    $('#nconnectcv').hide();
    $('#maskcomp').on({ 
            click: function() {
                $('#maskcomp').hide();
                $('#compet1').hide();
                $('#compet2').hide();
                $('#compet3').hide();
                $('#clickcomp').show();
            }
    });
    $('#clickcomp').on({ 
        click: function() {
            $('#maskcomp').show();
            $('#compet1').show();
            $('#compet2').show();
            $('#compet3').show();
            $('#clickcomp').hide();
        }
    });
    $('#maskform').on({ 
            click: function() {
                $('#maskform').hide();
                $('#formjs').hide();
                $('#clickform').show();
            }
    });
    $('#clickform').on({ 
        click: function() {
            $('#maskform').show();
            $('#formjs').show();
            $('#clickform').hide();
        }
    });
    $('#maskcv').on({ 
            click: function() {
                $('#maskcv').hide();
                $('#expjs').hide();
                $('#nconnectcv').hide();
                $('#clickcv').show();
            }
    });
    $('#clickcv').on({ 
        click: function() {
            $('#maskcv').show();
            $('#expjs').show();
            $('#nconnectcv').show();
            $('#clickcv').hide();
        }
    });
    $('#maskint').hide();
    $('#intjs').hide();
    $('#maskint').on({ 
            click: function() {
                $('#maskint').hide();
                $('#intjs').hide();
                $('#clickint').show();
            }
    });
    $('#clickint').on({ 
        click: function() {
            $('#maskint').show();
            $('#intjs').show();
            $('#clickint').hide();
        }
    });
    $('#nconnect').hide();
    $('#mask').hide();
    $('#adresse').hide();
    $('#mailnumero').hide();
    $('#reseauxsociaux').hide();
    $('#mask').on({ 
            click: function() {
                $('#nconnect').hide();
                $('#mask').hide();
                $('#adresse').hide();
                $('#mailnumero').hide();
                $('#reseauxsociaux').hide();
                $('#click').show();
            }
    });
    $('#click').on({ 
        click: function() {
            $('#nconnect').show();
            $('#mask').show();
            $('#adresse').show();
            $('#mailnumero').show();
            $('#reseauxsociaux').show();
            $('#click').hide();
        }
    });

});