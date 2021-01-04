<div class="bg-{{$color}}-900 text-center py-4 lg:px-4">
    <div class="p-2 bg-{{$color}}-800 items-center text-{{$color}}-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
        <svg class="h-6 w-6 text-teal mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg>
      <span class="flex rounded-full bg-{{$color}}-500 uppercase px-2 py-1 text-xs font-bold mr-3">{{$tag}}</span>
      <span class="font-semibold mr-2 text-left flex-auto">-</span>
      <span class="font-semibold mr-2 text-left flex-auto">{{$slot}}</span>
      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
</div>
