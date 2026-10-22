[double]$g = 9.81
    [double]$R = 0.75e-3
    [double]$mass_per_clip = 0.45e-3
    [double]$pi = [Math]::PI

    function calc_table([double]$l_mm, [double[]]$d_array, [string]$name) {
        $l = $l_mm * 1e-3
        Write-Host "### $name"
        Write-Host "| Počet sponek | m [g] | d [mm] | F [N] | E [Pa] | E [GPa] |"
        Write-Host "|---|---|---|---|---|---|"
        
        [double]$avg_E = 0
        [int]$cnt = 0

        for ($i = 0; $i -lt $d_array.Length; $i++) {
            $n = $i + 1
            $d_mm = $d_array[$i]
            $m = $n * $mass_per_clip
            $F = $m * $g
            
            if ($d_mm -eq 0) {
                $E_str = "-"
                $E_gpa_str = "-"
            } else {
                $d = $d_mm * 1e-3
                $E = (4 * $F * [Math]::Pow($l, 3)) / (3 * $pi * $d * [Math]::Pow($R, 4))
                $E_str = "{0:e2}" -f $E
                $E_gpa_str = "{0:f2}" -f ($E / 1e9)
                $avg_E += $E
                $cnt += 1
            }
            $m_g = "{0:f2}" -f ($m * 1000)
            $F_str = "{0:f4}" -f $F
            Write-Host "| $n | $m_g | $d_mm | $F_str | $E_str | $E_gpa_str |"
        }
        
        if ($cnt -gt 0) {
            $avg_E_val = $avg_E / $cnt
            $avg_E_str = "{0:e2}" -f $avg_E_val
            $avg_E_gpa_str = "{0:f2}" -f ($avg_E_val / 1e9)
            Write-Host "**Průměrné E = $avg_E_str Pa ($avg_E_gpa_str GPa)**"
            Write-Host ""
        }
    }

    calc_table 102 @(3, 4, 5, 6, 8, 9.5, 11, 12, 13.5, 14.5) "Tabulka 1: l = 102 mm"
    calc_table 76 @(1.5, 2.5, 3, 4, 4.5, 5, 6, 7.5, 8, 9) "Tabulka 2: l = 76 mm"
    calc_table 56 @(0, 1.5, 2, 3, 3.5, 4, 4.25, 4.5, 5, 5.5) "Tabulka 3: l = 56 mm"
