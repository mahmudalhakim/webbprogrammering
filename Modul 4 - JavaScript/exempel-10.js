// Funktioner som beräknar moms

// 25% moms
function moms25(pris){
    return pris * 1.25;
}
// 12% moms
function moms12(pris){
   // return (pris * 1.12).toFixed(2);
   var result = pris * 1.12;
   return result.toFixed(2);
}
// 6% moms
function moms6(pris){
    return pris * 1.06;
}

/* Generell funktion som beräknar moms
 *
 * Pris är priset exkl. moms
 * Momssats är antingen 25, 12 eller 6
 * 
 * Retun: pris inkl. moms
 */
function moms(pris , momssats){
    var result = pris * (1 + momssats/100);
    return result.toFixed(2);
}