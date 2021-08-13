<style>
 @import url('https://fonts.googleapis.com/css?family=Lora&display=swap');

body, html
{
	margin: 0;
	padding: 0;
	width: 100%;
	height: 100%;
	overflow: hidden;
	font-family: 'Lora', serif;
	color: #303030;
}

.night-label{
	opacity: 0.2;
}

body
{
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: #FEF9EA;
}

.layout
{
	width: 70vw;
	max-width: 300px;
	min-width: 250px;
	height: 30vh;
	display: grid;
	grid-template-columns: 1fr 2fr 1fr;
	justify-content: center;
	align-items: center;
	gap: 30px;
	font-size: 25px;
}

.layout:nth-child(1)
{
	text-align: right;
}

svg
{	
	width: 100%;
	height: 100%;
	cursor: pointer;
}

#night-content
{
	opacity: 0.5;
}

.inner-shadow
{
	stroke-opacity: 0.1;
	stroke-width: 5;
	stroke: black;
	fill: none;
}

.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}</style>

<div class="layout">
	<div class="day-label">Day</div>
	
	<label class="container">
	  <input id="input" type="checkbox" checked="checked">
	  <span class="checkmark">
		  
		
		<svg id="toggle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 34" width="60" height="34">
		<defs>
			

			<clipPath id="container" >
				<rect width="60" height="34" rx="17"/>
			</clipPath>
			<g id="day">
				<rect x="0" width="60" height="34" style="fill: #61b9e5"/>
				<g id="day-content">
				  <g class="clouds-small">
					<path d="M13.35,22.45a1,1,0,0,0-.44.1A1.62,1.62,0,0,0,11.29,21a1.67,1.67,0,0,0-.59.11,1.84,1.84,0,0,0-3.55.61h0a1.38,1.38,0,0,0,0,2.75h6.21a1,1,0,1,0,0-2Z" transform="translate(-2 -2)" style="fill: #d0edff"/>
					<path d="M27.38,23.72a1.05,1.05,0,0,0-.44.1,1.63,1.63,0,0,0-2.21-1.41,1.84,1.84,0,0,0-3.56.61h0a1.38,1.38,0,1,0,0,2.75h6.21a1,1,0,0,0,0-2.05Z" transform="translate(-2 -2)" style="fill: #d0edff"/>
					<path d="M56.7,24a1,1,0,0,0-.44.1,1.63,1.63,0,0,0-2.21-1.42,1.85,1.85,0,0,0-3.56.61h0a1.38,1.38,0,0,0,0,2.75H56.7a1,1,0,0,0,0-2Z" transform="translate(-2 -2)" style="fill: #d0edff"/>
					<path d="M84.35,22.45a1,1,0,0,0-.44.1A1.62,1.62,0,0,0,82.29,21a1.67,1.67,0,0,0-.59.11,1.84,1.84,0,0,0-3.55.61h0a1.38,1.38,0,0,0,0,2.75h6.21a1,1,0,1,0,0-2Z" transform="translate(-2 -2)" style="fill: #d0edff"/>
					<path d="M98.38,23.72a1.05,1.05,0,0,0-.44.1,1.63,1.63,0,0,0-2.21-1.41,1.84,1.84,0,0,0-3.56.61h0a1.38,1.38,0,1,0,0,2.75h6.21a1,1,0,0,0,0-2.05Z" transform="translate(-2 -2)" style="fill: #d0edff"/>
					<path d="M127.7,24a1,1,0,0,0-.44.1,1.63,1.63,0,0,0-2.21-1.42,1.85,1.85,0,0,0-3.56.61h0a1.38,1.38,0,0,0,0,2.75h6.21a1,1,0,0,0,0-2Z" transform="translate(-2 -2)" style="fill: #d0edff"/>
				  </g>
				  <g class="clouds-medium">
					<path d="M61.44,18.4a1.85,1.85,0,0,0-.77.18,2.85,2.85,0,0,0-2.85-2.68,3,3,0,0,0-1,.19,3.25,3.25,0,0,0-6.26,1.07h0a2.42,2.42,0,0,0,0,4.84H61.44a1.8,1.8,0,1,0,0-3.6Z" transform="translate(-2 -2)" style="fill: #e9f8ff"/>
					<path d="M26,17.07a1.84,1.84,0,0,0-.77.17,2.86,2.86,0,0,0-2.85-2.68,2.75,2.75,0,0,0-1,.2,3.24,3.24,0,0,0-6.26,1.07h0a2.42,2.42,0,1,0,0,4.84H26a1.8,1.8,0,0,0,0-3.6Z" transform="translate(-2 -2)" style="fill: #e9f8ff"/>
					<path d="M126.44,18.4a1.85,1.85,0,0,0-.77.18,2.85,2.85,0,0,0-2.85-2.68,3,3,0,0,0-1,.19,3.25,3.25,0,0,0-6.26,1.07h0a2.42,2.42,0,0,0,0,4.84h10.92a1.8,1.8,0,1,0,0-3.6Z" transform="translate(-2 -2)" style="fill: #e9f8ff"/>
					<path d="M91,17.07a1.84,1.84,0,0,0-.77.17,2.86,2.86,0,0,0-2.85-2.68,2.75,2.75,0,0,0-1,.2,3.24,3.24,0,0,0-6.26,1.07h0a2.42,2.42,0,0,0,0,4.84H91a1.8,1.8,0,0,0,0-3.6Z" transform="translate(-2 -2)" style="fill: #e9f8ff"/>
				  </g>
				  <g class="clouds-big">
					<path d="M24.82,10.83a3.09,3.09,0,0,0-1.29.29A4.78,4.78,0,0,0,17,7,5.43,5.43,0,0,0,6.54,8.76h0a4,4,0,1,0,0,8.09H24.82a3,3,0,0,0,0-6Z" transform="translate(-2 -2)" style="fill: #fff"/>
					<path d="M53.6,9.45a2.37,2.37,0,0,0-1,.24,3.86,3.86,0,0,0-3.84-3.61,4.09,4.09,0,0,0-1.4.26,4.36,4.36,0,0,0-8.41,1.45h0a3.25,3.25,0,0,0,0,6.5H53.6a2.42,2.42,0,1,0,0-4.84Z" transform="translate(-2 -2)" style="fill: #fff"/>
					<path d="M98.72,10.83a3.09,3.09,0,0,0-1.29.29A4.78,4.78,0,0,0,90.91,7a5.43,5.43,0,0,0-10.47,1.8h0a4,4,0,1,0,0,8.09H98.72a3,3,0,1,0,0-6Z" transform="translate(-2 -2)" style="fill: #fff"/>
					<path d="M127.5,9.45a2.41,2.41,0,0,0-1,.24,3.85,3.85,0,0,0-3.84-3.61,4.09,4.09,0,0,0-1.4.26,4.36,4.36,0,0,0-8.41,1.45h0a3.25,3.25,0,0,0,0,6.5h14.7a2.42,2.42,0,0,0,0-4.84Z" transform="translate(-2 -2)" style="fill: #fff"/>
				  </g>

				</g>
			</g>
			<g id="night">
				<rect width="60" height="34" style="fill: #004373"/>

				<g id="night-content">
				  <polygon class="star" points="46 4.89 46.62 6.14 48.01 6.35 47.01 7.33 47.24 8.71 46 8.06 44.76 8.71 44.99 7.33 43.99 6.35 45.38 6.14 46 4.89" style="fill: #fff5a6"/>
				  <polygon class="star" points="58.58 21.93 59.46 23.02 60.86 22.91 60.1 24.09 60.63 25.39 59.28 25.02 58.21 25.94 58.14 24.54 56.94 23.8 58.25 23.3 58.58 21.93" style="fill: #fff5a6"/>
				  <polygon class="star" points="40.71 12.02 40.82 13.42 42.03 14.13 40.74 14.66 40.44 16.04 39.53 14.97 38.13 15.11 38.87 13.91 38.3 12.63 39.67 12.96 40.71 12.02" style="fill: #fff5a6"/>
				  <polygon class="star" points="5 16.89 5.62 18.14 7.01 18.35 6 19.33 6.24 20.71 5 20.06 3.76 20.71 4 19.33 2.99 18.35 4.38 18.14 5 16.89" style="fill: #fff5a6"/>
				  <polygon class="star" points="60.57 6.97 60.79 8.36 62.05 8.97 60.8 9.6 60.61 10.99 59.62 10 58.24 10.25 58.88 9 58.22 7.76 59.6 7.99 60.57 6.97" style="fill: #fff5a6"/>
				  <polygon class="star" points="30.91 26.12 30.86 27.52 31.98 28.36 30.63 28.74 30.18 30.07 29.4 28.91 28 28.89 28.86 27.78 28.45 26.44 29.77 26.93 30.91 26.12" style="fill: #fff5a6"/>
				  <polygon class="star" points="17.52 13.95 18.44 15.01 19.83 14.86 19.11 16.06 19.68 17.34 18.32 17.02 17.28 17.96 17.16 16.56 15.94 15.87 17.23 15.32 17.52 13.95" style="fill: #fff5a6"/>
				  <polygon class="star" points="60.53 16.01 61.11 16.41 61.76 16.15 61.56 16.83 62 17.37 61.3 17.39 60.92 17.98 60.69 17.32 60.01 17.14 60.56 16.71 60.53 16.01" style="fill: #fff5a6"/>
				  <polygon class="star" points="41.99 21.89 42.31 22.52 43 22.62 42.5 23.11 42.62 23.8 41.99 23.47 41.37 23.8 41.49 23.11 40.99 22.62 41.69 22.52 41.99 21.89" style="fill: #fff5a6"/>
				  <polygon class="star" points="63.47 26.02 63.43 26.72 63.98 27.15 63.3 27.32 63.05 27.98 62.68 27.39 61.98 27.36 62.43 26.82 62.24 26.14 62.89 26.4 63.47 26.02" style="fill: #fff5a6"/>
				  <polygon class="star" points="36.99 9.89 37.31 10.52 38 10.62 37.5 11.11 37.62 11.8 36.99 11.47 36.37 11.8 36.49 11.11 35.99 10.62 36.69 10.52 36.99 9.89" style="fill: #fff5a6"/>
				  <polygon class="star" points="28.5 4.89 28.65 5.2 29 5.25 28.75 5.5 28.81 5.85 28.5 5.68 28.18 5.85 28.24 5.5 27.99 5.25 28.34 5.2 28.5 4.89" style="fill: #fff5a6"/>
				  <polygon class="star" points="28.5 12.89 28.65 13.2 29 13.25 28.75 13.5 28.81 13.85 28.5 13.68 28.18 13.85 28.24 13.5 27.99 13.25 28.34 13.2 28.5 12.89" style="fill: #fff5a6"/>
				  <polygon class="star" points="47.75 22.96 47.72 23.31 47.98 23.54 47.64 23.61 47.5 23.94 47.32 23.63 46.97 23.6 47.21 23.34 47.13 23 47.45 23.14 47.75 22.96" style="fill: #fff5a6"/>
				  <polygon class="star" points="51.75 31.96 51.72 32.31 51.98 32.54 51.64 32.62 51.5 32.94 51.32 32.63 50.97 32.6 51.21 32.34 51.13 32 51.45 32.15 51.75 31.96" style="fill: #fff5a6"/>
				  <polygon class="star" points="44.69 29.93 44.7 30.28 45 30.47 44.67 30.59 44.58 30.93 44.37 30.66 44.01 30.68 44.21 30.38 44.08 30.06 44.42 30.15 44.69 29.93" style="fill: #fff5a6"/>
				  <polygon class="star" points="24.32 10.92 24.58 11.16 24.92 11.07 24.78 11.4 24.96 11.7 24.61 11.66 24.39 11.93 24.31 11.58 23.98 11.45 24.29 11.27 24.32 10.92" style="fill: #fff5a6"/>
				  <polygon class="star" points="24.94 13.18 24.71 13.45 24.79 13.79 24.47 13.65 24.17 13.84 24.2 13.49 23.93 13.26 24.27 13.19 24.41 12.86 24.59 13.16 24.94 13.18" style="fill: #fff5a6"/>
				  <polygon class="star" points="32 19.89 32.31 20.52 33 20.62 32.5 21.11 32.62 21.8 32 21.47 31.37 21.8 31.49 21.11 30.99 20.62 31.68 20.52 32 19.89" style="fill: #fff5a6"/>
				  <polygon class="star" points="19.61 21.97 20.15 22.42 20.82 22.23 20.56 22.88 20.95 23.46 20.25 23.42 19.82 23.97 19.64 23.29 18.98 23.04 19.58 22.67 19.61 21.97" style="fill: #fff5a6"/>
				  <polygon class="star" points="9.51 8.04 9.43 8.74 9.96 9.2 9.28 9.34 9 9.98 8.65 9.37 7.96 9.31 8.43 8.79 8.27 8.11 8.91 8.4 9.51 8.04" style="fill: #fff5a6"/>
				</g>
			</g>
			<clipPath id="switch" >
				<circle id="circle" cx="19" cy="17" r="10"/>
			</clipPath>
		</defs>

		<g clip-path="url(#container)">
			<use id="back" href="#day"/>
			<g clip-path="url(#switch)">
				<use id="front" href="#night" />
			</g>
			<rect class="inner-shadow" width="70" height="44" rx="20"/>
		</g>
		
		<rect width="60" height="44" rx="17" opacity="0"/>

	</svg>
	</span>
	</label>
	<div class="night-label">Night</div>
</div>