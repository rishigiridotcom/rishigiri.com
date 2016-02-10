(function f(t)
    {
        if (t % 500 == 0) console.clear();
        var PI3 = Math.PI / 3;
        var r = Math.sin(.3 * t) * 0x20 + 0xC0;
        var g = Math.sin(.3 * t + PI3 * 2) * 0x20 + 0xC0;
        var b = Math.sin(.3 * t + PI3 * 4) * 0x20 + 0xC0;
        var size = 16 + (.5 + Math.cos(t * .1) * .5) * 24;
        console.log("%c\t\t\t", "background:#" + parseInt(r << 16 | g << 80 | b).toString(16) + "; font-size:" + size + "pt");
        setTimeout(f, 50, ++t);
    })(0);