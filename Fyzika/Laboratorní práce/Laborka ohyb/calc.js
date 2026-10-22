const g = 9.81;
const R = 0.75e-3;
const mass_per_clip = 0.45e-3;

function calc_table(l_mm, d_array, name) {
    const l = l_mm * 1e-3;
    console.log(`### ${name}`);
    console.log(`| Počet sponek | m [g] | d [mm] | F [N] | E [Pa] | E [GPa] |`);
    console.log(`|---|---|---|---|---|---|`);
    
    let avg_E = 0;
    let cnt = 0;

    for (let i = 0; i < d_array.length; i++) {
        const n = i + 1;
        const d_mm = d_array[i];
        const m = n * mass_per_clip;
        const F = m * g;
        
        let E_str = "-";
        let E_gpa_str = "-";
        
        if (d_mm !== 0) {
            const d = d_mm * 1e-3;
            const E = (4 * F * Math.pow(l, 3)) / (3 * Math.PI * d * Math.pow(R, 4));
            E_str = E.toExponential(2);
            E_gpa_str = (E / 1e9).toFixed(2);
            avg_E += E;
            cnt += 1;
        }
        const m_g = (m * 1000).toFixed(2);
        const F_str = F.toFixed(4);
        console.log(`| ${n} | ${m_g} | ${d_mm} | ${F_str} | ${E_str} | ${E_gpa_str} |`);
    }
    
    if (cnt > 0) {
        const avg_E_val = avg_E / cnt;
        console.log(`**Průměrné E = ${avg_E_val.toExponential(2)} Pa (${(avg_E_val / 1e9).toFixed(2)} GPa)**\n`);
    }
}

calc_table(102, [3, 4, 5, 6, 8, 9.5, 11, 12, 13.5, 14.5], "Tabulka 1: l = 102 mm");
calc_table(76, [1.5, 2.5, 3, 4, 4.5, 5, 6, 7.5, 8, 9], "Tabulka 2: l = 76 mm");
calc_table(56, [0, 1.5, 2, 3, 3.5, 4, 4.25, 4.5, 5, 5.5], "Tabulka 3: l = 56 mm");
