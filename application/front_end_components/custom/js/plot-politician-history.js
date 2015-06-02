/**
 * 
 */

//Flot Line Chart
$(document).ready(function() {
    console.log("document ready");
    var offset = 0;
    plot();

    function plot() {
       
        var options = {
            series: {
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            grid: {
                hoverable: true //IMPORTANT! this is needed for tooltip to work
            },
            xaxis: {
                mode: "time",
                timeformat: "%Y/%m/%d"
            },
            yaxis: {
                min: 0,
                max: 100
            },
            tooltip: true,
            tooltipOpts: {
                content: "%s | Fecha: %x | Aprobacion: %y %",
                shifts: {
                    x: -60,
                    y: 25
                }
            }
            
            
            
        }
     
        var plotObj = $.plot($("#flot-line-chart"), [{
                data: politicianhistoricscoreavg,
                label: "Avg"
            }, {
                data: politicianhistoricscoreuser,
                label: "User"
            }],
            options);
          
    }
});
