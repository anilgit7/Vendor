<div class="flex flex-col space-y-5">
    <div>
        <h1 class="font-bold text-[1.5rem]">Node Details</h1>
        <table class="text-left">
            <thead>
                <tr>
                    <th>S.n</th>
                    <th>Title</th>
                    <th>Lat</th>
                    <th>Lng</th>
                    <th>G</th>
                    <th>H</th>
                    <th>F</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($nodes as $item)
                        <tr>
                            <td class="pr-[1.5rem]">{{$loop->iteration}}</td>
                            <td class="pr-[1.5rem]">{{$item['title']}}</td>
                            <td class="pr-[1.5rem]">{{$item['latitude']}}</td>
                            <td class="pr-[1.5rem]">{{$item['longitude']}}</td>
                            <td class="pr-[1.5rem]">{{$item['g']}}</td>
                            <td class="pr-[1.5rem]">{{$item['h']}}</td>
                            <td class="pr-[1.5rem]">{{$item['f']}}</td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <h1 class="font-bold text-[1.5rem]">Edge Details</h1>
        <table class="text-left">
            <thead>
                <tr>
                    <th>S.n</th>
                    <th>Title</th>
                    <th>Lat1</th>
                    <th>Lng1</th>
                    <th>Lat2</th>
                    <th>Lng2</th>
                    <!-- <th>G</th>
                    <th>H</th>
                    <th>F</th> -->
                </tr>
            </thead>
            <tbody>
                    @foreach ($edges as $item)
                        <tr>
                            <td class="pr-[1.5rem]">{{$loop->iteration}}</td>
                            <td class="pr-[1.5rem]">{{$item['title']}}</td>
                            <td class="pr-[1.5rem]">{{$item['lat1']}}</td>
                            <td class="pr-[1.5rem]">{{$item['lng1']}}</td>
                            <td class="pr-[1.5rem]">{{$item['lat2']}}</td>
                            <td class="pr-[1.5rem]">{{$item['lng2']}}</td>
                            <!-- <td class="pr-[1.5rem]">{{$item['g']}}</td>
                            <td class="pr-[1.5rem]">{{$item['h']}}</td>
                            <td class="pr-[1.5rem]">{{$item['f']}}</td> -->
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <h1 class="font-bold text-[1.5rem]">Path Found</h1>
        <table class="text-left">
            <thead>
                <tr>
                    <th>S.n</th>
                    <th>Title</th>
                    <th>Lat</th>
                    <th>Lng</th>
                    <th>G</th>
                    <th>H</th>
                    <th>F</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($paths as $item)
                        <tr>
                            <td class="pr-[1.5rem]">{{$loop->iteration}}</td>
                            <td class="pr-[1.5rem]">{{$item['title']}}</td>
                            <td class="pr-[1.5rem]">{{$item['lat']}}</td>
                            <td class="pr-[1.5rem]">{{$item['lng']}}</td>
                            <td class="pr-[1.5rem]">{{$item['g']}}</td>
                            <td class="pr-[1.5rem]">{{$item['h']}}</td>
                            <td class="pr-[1.5rem]">{{$item['f']}}</td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
