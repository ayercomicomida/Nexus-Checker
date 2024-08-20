<header
        class="sticky top-0 z-40 flex w-full dark:shadow-black shadow-slate-300 dark:bg-opacity-50 bg-background/10 dark:bg-[#202b40] border-b border-slate-150 dark:border-[#26334d] backdrop-blur-md">
        <div class="items-center w-full px-4 space-x-4 h-14 justify-between flex flex-row sm:space-x-0">
            <div class="md:hidden"><button data-state="closed"><a target aria-disabled="false"
                                class="items-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full justify-start flex gap-2"
                                href="../profile"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap">
                                    <circle cx="12" cy="8" r="5"></circle>
                                <path d="M20 21a8 8 0 1 0-16 0"></path>
                                </svg></a></button></div><img alt="vacstresser logo"
                loading="lazy" width="50" height="50" decoding="async" data-nimg="1" style="color:transparent"
                srcSet="../assets/logo/logo.png, ../assets/logo/logo.png"
                src="../assets/logo/logo.png" /><a
                class="pl-14 font-bold font-special text-3xl text-primary hidden md:flex justify-self-center"
                href="/">Nexus Center</a>

                
                <?php if ($_SESSION['plan'] == 'admin'): ?>
                                    <button data-state="closed"><a target aria-disabled="false"
                                    class="items-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full justify-start flex gap-2"
                                    href="../administrator"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-box">
                                        <path
                                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                        </path>
                                        <polyline points="3.29 7 12 12 20.71 7"></polyline>
                                        <line x1="12" x2="12" y1="22" y2="12"></line>
                                    </svg></a></button>
                <?php endif; ?>

                <?php if ($_SESSION['plan'] != 'admin'): ?>
                <button data-state="closed"><a target="_blank" aria-disabled="false"
                                class="items-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full justify-start flex gap-2"
                                href="https://t.me/CirqueiraDev"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-life-buoy">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m4.93 4.93 4.24 4.24"></path>
                                    <path d="m14.83 9.17 4.24-4.24"></path>
                                    <path d="m14.83 14.83 4.24 4.24"></path>
                                    <path d="m9.17 14.83-4.24 4.24"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                </svg></a></button>
                <?php endif; ?>
        </div>
    </header>
    