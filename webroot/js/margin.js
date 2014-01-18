/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function margin(){
    var tpq = document.getElementById('LeadTotalPriceQuoted').value;
    var op = document.getElementById('LeadOurPrice').value;
    var margin = tpq-op;
    document.getElementById('LeadMargin').value = margin;
}


