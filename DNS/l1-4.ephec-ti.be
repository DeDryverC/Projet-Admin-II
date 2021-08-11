$TTL 86400
@       IN      SOA     ns.l1-4.ephec-ti.be. a.bombaert@students.ephec.be. (
                        2021051752           ; Serial
                        43200      ; Refresh
                        7200       ; Retry
                        2419200     ; Expire
                        86400 )    ; Negative Cache TTL
;
; NS configs
            IN      NS      ns.l1-4.ephec-ti.be.
ns          IN      A       135.125.101.210

; liaison des nom de serveurs avec les adresses IP pour ce qui touche au service Web
b2b         IN      A       135.125.101.210
www         IN      A       135.125.101.210


$INCLUDE l1-4.ephec-ti.be.ksk.key
$INCLUDE l1-4.ephec-ti.be.zsk.key