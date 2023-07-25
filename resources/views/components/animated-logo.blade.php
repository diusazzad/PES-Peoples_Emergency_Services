<!-- resources/views/components/animated-logo.blade.php -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 100"
    class="h-10 w-20 sm:w-24 md:w-28 lg:w-32 xl:w-36">
    <rect width="100%" height="100%" rx="10" ry="10" fill="none" stroke="none"
        style="animation: rainbowBorder 2s infinite;"></rect>
    <text x="30%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="Arial"
        font-size="40" font-weight="bold" fill="black"
        style="animation: blurAnimation 3s ease-in-out infinite;">
        P
        <animate attributeName="fill" values="black; transparent; black" keyTimes="0; 0.4; 1" dur="3s"
            repeatCount="indefinite" />
    </text>
    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="Arial"
        font-size="40" font-weight="bold" fill="black"
        style="animation: blurAnimation 3s ease-in-out 1s infinite;">
        E
        <animate attributeName="fill" values="black; transparent; black" keyTimes="0; 0.4; 1" dur="3s"
            repeatCount="indefinite" />
    </text>
    <text x="70%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="Arial"
        font-size="40" font-weight="bold" fill="black"
        style="animation: blurAnimation 3s ease-in-out 2s infinite;">
        S
        <animate attributeName="fill" values="black; transparent; black" keyTimes="0; 0.4; 1" dur="3s"
            repeatCount="indefinite" />
    </text>
</svg>

<style>
    @keyframes blurAnimation {
        0% {
            filter: blur(0);
        }

        33.33% {
            filter: blur(3px);
        }

        66.66% {
            filter: blur(6px);
        }

        100% {
            filter: blur(0);
        }
    }

    @keyframes rainbowBorder {
        0% {
            stroke: red;
        }

        16.67% {
            stroke: orange;
        }

        33.33% {
            stroke: yellow;
        }

        50% {
            stroke: green;
        }

        66.67% {
            stroke: blue;
        }

        83.33% {
            stroke: indigo;
        }

        100% {
            stroke: violet;
        }
    }
</style>
