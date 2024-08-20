        <div
            class="pb-12 dark:shadow-black shadow-slate-300 bg-white border-r border-slate-150 dark:bg-opacity-50 dark:bg-[#202b40] dark:border-[#26334d] sidebar-height hidden md:flex md:fixed lg:fixed z-10">
            <div class="space-y-4 py-4">
                <div class="px-3 py-2">
                    <div class="space-y-4 flex flex-col">
                                
                                <button data-state="closed"><a target aria-disabled="false"
                                class="items-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full justify-start flex gap-2"
                                href="../panel"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap">
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                </svg></a></button>

                                <?php if ($_SESSION['plan'] == 'admin'): ?>
                                    <button data-state="closed"><a target aria-disabled="false"
                                    class="items-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full justify-start flex gap-2"
                                    href="/adminHub"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-box">
                                        <path
                                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                        </path>
                                        <polyline points="3.29 7 12 12 20.71 7"></polyline>
                                        <line x1="12" x2="12" y1="22" y2="12"></line>
                                    </svg></a></button>
                                <?php endif; ?>

                        
                                
                            </div>
                    <div class="absolute bottom-0 py-2">
                    <button data-state="closed"><a target aria-disabled="false"
                                    class="items-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full justify-start flex gap-2"
                                    href="http://localhost/nexuscenter/Profile/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-box">
                                        <circle cx="12" cy="8" r="5"></circle>
                                <path d="M20 21a8 8 0 1 0-16 0"></path>
                                    </svg></a></button>
                                </div>
                    </div>
                </div>
            </div>
        </div>