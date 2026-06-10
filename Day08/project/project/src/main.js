import './style.css'
import { setupCounter } from './counter.js'

document.querySelector('#app').innerHTML = `
<main class="min-h-screen bg-slate-900 text-slate-100 flex flex-col items-center justify-center font-sans">
  
  <div class="text-center space-y-4">
    <h1 class="text-4xl font-bold text-indigo-400 tracking-tight">
      Tailwind Project Started
    </h1>
    
    <p class="text-slate-400">
      Delete this HTML in <code class="bg-slate-800 px-1.5 py-0.5 rounded text-indigo-300">main.js</code> and build your project.
    </p>

    <div class="pt-2">
      <button id="counter" type="button" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-500 active:bg-indigo-700 rounded-lg font-medium transition-colors cursor-pointer"></button>
    </div>
  </div>

</main>
`

setupCounter(document.querySelector('#counter'))
