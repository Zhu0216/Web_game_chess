# Web_game_chess ♟️

這是一個結合 **前端 Web 介面** 與 **PHP 後端服務** 的西洋棋遊戲專案。本專案不僅實現了複雜的遊戲邏輯，更透過 **SQLite** 實現了本地端數據持久化，展示了全端開發的基礎架構能力。

## 🚀 專案亮點 (Key Features)

*   **全端架構整合**：前端使用 JavaScript 處理遊戲邏輯，後端透過 **PHP 本地伺服器** 進行數據交換。
*   **數據持久化 (Persistence)**：整合 **SQLite 本地資料庫**，實現玩家分數、對戰紀錄的儲存與查詢功能。
*   **西洋棋核心邏輯**：
    *   精準定義各棋種（國王、皇后、騎士等）的移動規則。
    *   即時座標偵測與合法路徑演算法。
*   **異步數據更新**：利用技術實現前端與 PHP 伺服器的動態溝通，確保分數紀錄不因頁面重新整理而遺失。

## 🛠️ 技術棧 (Tech Stack)

*   **Frontend:** HTML5, CSS3, JavaScript (Vanilla JS)
*   **Backend:** PHP (Local Server)
*   **Database:** SQLite 3
*   **Version Control:** Git

## 📂 專案結構 (Project Structure)

```text
├── index.html          # 遊戲主要畫面
├── style.css           # 棋盤與 UI 視覺樣式
├── script.js           # 前端遊戲控制邏輯
├── server/
│   ├── api.php         # PHP 資料處理接口
│   └── database.db     # SQLite 本地資料庫檔案
└── README.md           # 專案技術說明
```
<img width="1600" height="900" alt="image" src="https://github.com/user-attachments/assets/78c5a24a-891d-43f8-8a2c-f9db20590d9d" />
<img width="1600" height="900" alt="image" src="https://github.com/user-attachments/assets/8b4347ee-6829-4772-b273-ec0b0d23324c" />
<img width="1600" height="900" alt="image" src="https://github.com/user-attachments/assets/bb6a8c58-8ee2-4300-9322-cce7bf2be273" />
