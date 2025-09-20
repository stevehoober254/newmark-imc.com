$(document).ready(function () {
    window._token = $('meta[name="csrf-token"]').attr('content')

    let currentUrl = window.location.href;
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('download_report')) {
        // update h4 tag with report name
        const reportName = getReport();
        $("#reportName").text(reportName);
        if (reportName === 'Media Analysis Report 2023') {
            $("#reportBtn").text('Download  Report');
            $('#downloadLink').attr('href', 'https://newmark-imc.com/files/MediaAnalysis.pdf');
        }
        if (reportName === 'Our Experiential Profile') {
            $("#reportBtn").text('Download Catalogue');
            $('#downloadLink').attr('href', 'https://newmark-imc.com/files/NewmarkExperientialProfile.pdf');
        }
        if (reportName === 'Brand Reputation and Analysis Report') {
            $("#reportBtn").text('Download Report');
            $('#downloadLink').attr('href', 'https://newmark-imc.com/files/BrandReputationandConsumerAnaylsisReport.pdf');
        }
        $("#leadform").removeClass("d-none");
    }


    $(".leadform-trigger").on('click', function (event) {

        let newUrl;
        const buttonClicked = $(this).attr('id');

        if (buttonClicked === 'mediaReport') {
            if (currentUrl.indexOf('?') !== -1) {
                newUrl = currentUrl + '&download_report=Media Analysis Report 2023';
            } else {
                newUrl = currentUrl + '?download_report=Media Analysis Report 2023';
            }
        }
        if (buttonClicked === 'experientialProfile') {
            if (currentUrl.indexOf('?') !== -1) {
                newUrl = currentUrl + '&download_report=Our Experiential Profile';
            } else {
                newUrl = currentUrl + '?download_report=Our Experiential Profile';
            }
        }
        if (buttonClicked === 'insightsreport') {
            if (currentUrl.indexOf('?') !== -1) {
                newUrl = currentUrl + '&download_report=Brand Reputation and Analysis Report';
            } else {
                newUrl = currentUrl + '?download_report=Brand Reputation and Analysis Report';
            }
        }
        window.location.href = newUrl;

    })

    // Handle form submition
    $("#leadForm").submit(function (event) {
        event.preventDefault();


        $(".leadform-loader").removeClass('d-none');


        let formData = {
            first_name: $("#first_name").val(),
            last_name: $("#last_name").val(),
            email: $("#email").val(),
            phone: $("#mob").val(),
            company: $("#company").val(),
            job: $("#job").val()
        };
        
        // -- temporary redirect- fix the email service
        // $(".leadform-loader").addClass('d-none');
        // $("#leadform-success").removeClass('d-none');
        // // redirect to report
        //         if (getReport() === 'Media Analysis Report 2023') {
        //             window.location.href = "https://newmark-imc.com/files/MediaAnalysis.pdf";
        //         }
        //         if (getReport() === 'Our Experiential Profile') {
        //             window.location.href = "https://newmark-imc.com/files/NewmarkExperientialProfile.pdf";
        //         }
        //         if (getReport() === 'Brand Reputation and Analysis Report') {
        //             window.location.href = "https://newmark-imc.com/files/BrandReputationandConsumerAnaylsisReport.pdf";
        //         }
        // ---

        $.post("https://newmarkleads-api.onrender.com/api/newmark/mediareports/leads", formData, function (data) {
            console.log('Form data', data);
            if (data.code === 200) {
                $(".leadform-loader").addClass('d-none');
                $("#leadform-success").removeClass('d-none');

                // redirect to report
                if (getReport() === 'Media Analysis Report 2023') {
                    window.location.href = "https://newmark-imc.com/files/MediaAnalysis.pdf";
                }
                if (getReport() === 'Our Experiential Profile') {
                    window.location.href = "https://newmark-imc.com/files/NewmarkExperientialProfile.pdf";
                }
                if (getReport() === 'Brand Reputation and Analysis Report') {
                    window.location.href = "https://newmark-imc.com/files/BrandReputationandConsumerAnaylsisReport.pdf";
                }

            } else {
                // show error
                $(".leadform-loader").addClass('d-none');
                $("#leadform-error").removeClass("d-none");
            }
        });
    });

    function getReport() {
        return urlParams.get('download_report');
    }

    function validate(val) {
        let v1 = document.getElementById("first_name");
        let v2 = document.getElementById("last_name");
        let v3 = document.getElementById("email");
        let v4 = document.getElementById("mob");
        let v5 = document.getElementById("job");
        let v6 = document.getElementById("company");

        let flag1 = true;
        let flag2 = true;
        let flag3 = true;
        let flag4 = true;
        let flag5 = true;
        let flag6 = true;

        if (val >= 1 || val === 0) {
            if (v1.value === "") {
                v1.style.borderColor = "red";
                flag1 = false;
            }
            else {
                v1.style.borderColor = "green";
                flag1 = true;
            }
        }

        if (val >= 2 || val === 0) {
            if (v2.value === "") {
                v2.style.borderColor = "red";
                flag2 = false;
            }
            else {
                v2.style.borderColor = "green";
                flag2 = true;
            }
        }
        if (val >= 3 || val === 0) {
            if (v3.value === "") {
                v3.style.borderColor = "red";
                flag3 = false;
            }
            else {
                v3.style.borderColor = "green";
                flag3 = true;
            }
        }
        if (val >= 4 || val === 0) {
            if (v4.value === "") {
                v4.style.borderColor = "red";
                flag4 = false;
            }
            else {
                v4.style.borderColor = "green";
                flag4 = true;
            }
        }
        if (val >= 5 || val === 0) {
            if (v5.value === "") {
                v5.style.borderColor = "red";
                flag5 = false;
            }
            else {
                v5.style.borderColor = "green";
                flag5 = true;
            }
        }
        if (val >= 6 || val === 0) {
            if (v6.value === "") {
                v6.style.borderColor = "red";
                flag6 = false;
            }
            else {
                v6.style.borderColor = "green";
                flag6 = true;
            }
        }

        flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

        return flag;
    }
})