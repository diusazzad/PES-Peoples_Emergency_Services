<style>
    body {
        /* display: flex; */
        /* justify-content: center; */
        /* align-items: center; */
        /* height: 100vh; */
        /* margin: 0; */
        /* background-color: #222; */
    }

    .xperia-logo {
        display: flex;
        align-items: center;
        font-size: 1rem;
        color: #00ADEF;
        font-weight: bold;
    }

    .x {
        animation: shiftX 1s ease-in-out;
    }

    .peria {
        display: flex;
        font-size: .5rem;
    }

    .char {
        opacity: 0;
        transform: translateY(10px);
        animation: fadeIn 1s ease-in-out forwards;
        animation-delay: calc(1s + var(--delay) * 0.2s);
    }

    .char.gradient {
        background: linear-gradient(to right, #FFAC00, #FFD700);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
    }

    @keyframes shiftX {
        0% {
            transform: scale(2);
        }

        100% {
            transform: scale(1);
        }
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(10px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<div class="xperia-logo hover:animate-ping">
    <div class="x">X</div>
    <div class="peria">
        <span class="char" style="--delay: 0">p</span>
        <span class="char" style="--delay: 1">e</span>
        <span class="char" style="--delay: 2">r</span>
        <span class="char gradient" style="--delay: 3">i</span>
        <span class="char gradient" style="--delay: 4">a</span>
    </div>
</div>
