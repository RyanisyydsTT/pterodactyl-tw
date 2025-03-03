<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => '該FQDN或IP位址無法被解析。',
        'fqdn_required_for_ssl' => '要使用此節點的 SSL，必須有解析為公共IP位址的完整網域名稱 (FQDN)。',
    ],
    'notices' => [
        'allocations_added' => '連接阜已被新增到節點。',
        'node_deleted' => '節點已成功刪除。',
        'location_required' => '你必須至少擁有一個地點才能新增新節點。',
        'node_created' => '節點已成功創建。 你可以前往"設定"頁面自動設定Daemon。 <strong>在創建伺服器之前，你必須至少擁有一個連接阜。</strong>',
        'node_updated' => '節點資料已更新。 Daemon設定需要重新啟動才能生效。',
        'unallocated_deleted' => '已刪除所有 <code>:ip</code> 裡未綁定的連接阜。',
    ],
];
