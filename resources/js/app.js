import './bootstrap';
import 'bootstrap';
import '@popperjs/core';
import { jsPDF } from "jspdf";

function downloadPDFWithjsPDF(e) {
    e.preventDefault();

    var doc = new jsPDF({
        orientation: "landscape",
    });

    20

doc.setFont("helvetica");
doc.setFontSize(0.1);

    doc.html(document.querySelector('#tabla-movimiento'), {
        callback: function (doc) {
            doc.save('MLB World Series Winners.pdf');
        },
    });
}

document.querySelector('#btn-download')?.addEventListener('click', downloadPDFWithjsPDF);
