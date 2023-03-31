$(document).ready(function () {
    $("#custalert").hide();
    // $("#custalert").text("Enter CustID");
    $("#loanalert").hide();
    // $("#loanalert").text("Enter LoanID");
    $("#emialert").hide();
});

function checkcustid() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.responseText == 1) {
            $("#custalert").hide();
        }
        else {
            $("#custalert").show();
        }
    }
    xmlhttp.open("GET", "checkcust.php?q=" + $("#custid").val(), true);
    xmlhttp.send();
    // if ($("#custid").val() == "") {
    //     flag = 0;
    // }
    // else {
    // }
}

function checkloanid() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.responseText == 1) {
            $("#loanalert").hide();
        }
        else {
            $("#loanalert").show();
        }
    }
    xmlhttp.open("GET", "checkloan.php?q=" + $("#loanid").val(), true);
    xmlhttp.send();
    // if ($("#loanid").val() == "") {
    //     $("#loanalert").show();
    //     flag = 0;
    // }
    // else {
    //     $("#loanalert").hide();
    // }
}

function validate2() {
    if ($("#custid").val() != "" && $("#loanid").val() != "") {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                try {
                    if (this.responseText == 1) {
                        window.location.href = "http://localhost:8080/THEORY/LoginDetailsSuccess.php?custid=" + $("#custid").val() + "&loanid=" + $("#loanid").val();
                    }
                    else
                    {
                        throw "Invalid";
                    }
                    
                }
                catch (err) {
                    window.location.href = "http://localhost:8080/THEORY/LoginDetailsFailure.php";
                    console.log(err);
                }
            }
        };
        xmlhttp.open("GET", "check.php?custid=" + $("#custid").val() + "&loanid=" + $("#loanid").val(), true);
        xmlhttp.send();
    }
    else {
        checkcustid();
        checkloanid();
        return false;
    }
}

function validate() {
    var flag = 1;
    if ($("#custid").val() == "") {
        $("#custalert").show();
        flag = 0;
    }
    else {
        $("#custalert").hide();
    }

    if ($("#loanid").val() == "") {
        $("#loanalert").show();
        flag = 0;
    }
    else {
        $("#loanalert").hide();
    }

    if (flag != 0) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText == 1) {
                    window.location.href = "http://localhost:8080/THEORY/LoginDetailsSuccess.php?custid=" + $("#custid").val() + "&loanid=" + $("#loanid").val();
                }
                else {
                    window.location.href = "http://localhost:8080/THEORY/LoginDetailsFailure.php";

                }
            }
        };
        xmlhttp.open("GET", "check.php?custid=" + $("#custid").val() + "&loanid=" + $("#loanid").val(), true);
        xmlhttp.send();
    }
    return false;
}


function checkrange() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.responseText == 1) {
            $("#emialert").hide();
        }
        else {
            $("#emialert").show();
        }
    };
    xmlhttp.open("GET", "checkrange.php?x=" + $("#emi").val(), true);
    xmlhttp.send();

}

function update() {
    if ($("#emi").val() != "" && $("#emialert").is(":hidden")) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                try {
                    if (this.responseText == 1 && $("#status").val() == "New") {
                        window.location.href = "http://localhost:8080/THEORY/detailsupdated.php";
                    }
                    else {
                        throw "Error";
                    }

                }
                catch (err) {
                    console.log(err);
                    window.location.href = "http://localhost:8080/THEORY/detailsnotupdated.php";

                }
            }
        };
        xmlhttp.open("GET", "update.php?emi=" + $("#emi").val() + "&tenure=" + $("#tenure").val() + "&custid=" + $("#custid").val(), true);
        xmlhttp.send();
    }
    else {
        return false;
    }
}