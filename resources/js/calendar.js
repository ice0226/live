import '@fullcalendar/core/vdom';
import axios from "axios";
import { Calendar } from "@fullcalendar/core";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from '@fullcalendar/timegrid';

// カレンダーを表示させたいタグのidを取得
var calendarEl = document.getElementById("calendar");

let calendar = new Calendar(calendarEl, {
    plugins: [dayGridPlugin, timeGridPlugin],
    initialView: "dayGridMonth", // 最初に表示させるページの形式
    headerToolbar: { 
        start: "prev,next today", // ヘッダー左（前月、次月、今日の順番で左から配置）
        center: "title", // ヘッダー中央（今表示している月、年）
        end: "dayGridMonth,timeGridWeek", // ヘッダー右（月形式、時間形式）
    },
    height: "auto", // 高さをウィンドウサイズに揃える
});

// カレンダーのレンダリング
calendar.render();