<?php include("header.php"); ?>
     <div class="container">

          <div class="row">
               <div class="col-12">
                    <h1 class="page-title">Shoe Size Charts</h1>
               </div>
          </div>

          <div class="row">
               <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                    <div class="section-title">
                         Categories
                    </div>
                    <div class="list-group category-list">
                         <a class="list-group-item active" id="mens-tab" data-toggle="tab" href="#mens-content" role="tab" aria-controls="mens" aria-selected="true">
                              <span>Mens</span>
                         </a>
                         <a class="list-group-item" id="womens-tab" data-toggle="tab" href="#womens-content" role="tab" aria-controls="womens" aria-selected="false">
                              <span>Womens</span>
                         </a>
                         <a class="list-group-item" id="kids-big-tab" data-toggle="tab" href="#kids-big-content" role="tab" aria-controls="kids-big" aria-selected="false">
                              <span>Big Kids</span>
                              <small>(7 – 12 Years)</small>
                         </a>
                         <a class="list-group-item" id="kids-small-tab" data-toggle="tab" href="#kids-small-content" role="tab" aria-controls="kids-small" aria-selected="false">
                              <span>Small Kids</span>
                              <small>(4 – 7 Years)</small>
                         </a>
                         <a class="list-group-item" id="toddlers-tab" data-toggle="tab" href="#toddlers-content" role="tab" aria-controls="toddlers" aria-selected="false">
                              <span>Toddlers</span>
                              <small>(9 Months – 4 Years)</small>
                         </a>
                         <a class="list-group-item" id="infants-tab" data-toggle="tab" href="#infants-content" role="tab" aria-controls="infants" aria-selected="false">
                              <span>Infants</span>
                              <small>(0 – 9 Months)</small>
                         </a>
                    </div>

                    <!-- CONVERTER -->
                    <div class="section-title">
                         Size Converter
                    </div>
                    <div class="row converter">
                         <div class="col-12">
                              <h6 class="converter-header">
                                   Input
                              </h6>
                         </div>
                         <div class="col-5 col-sm-5 col-md-6 col-lg-6 col-xl-6">
                              <select id="input-unit" name="" class="form-control">
                                   <option value="null" selected disabled>Unit</option>
                                   <option value="1">US</option>
                                   <option value="2">EU</option>
                                   <option value="3">UK</option>
                              </select>
                         </div>
                         <div class="col-5 col-sm-5 col-md-6 col-lg-6 col-xl-6">
                              <select id="input-value" name="" class="form-control" disabled>
                                   <option value="null" selected disabled>Size</option>
                              </select>
                         </div>
                         <div class="col-2 col-sm-2 col-md-12 col-lg-12 col-xl-12">
                              <button id="convert" class="btn btn-block">
                                   Go
                              </button>
                         </div>
                    </div>
                    <div class="row results hidden">
                         <div class="col-12">
                              <h6 class="result-header">
                                   Results
                              </h6>
                         </div>
                         <div class="col-4">
                              <div class="result-box">
                                   <label for="result-us">US</label><span id="result-us">99</span>
                              </div>
                         </div>
                         <div class="col-4">
                              <div class="result-box">
                                   <label for="result-eu">EU</label><span id="result-eu">99</span>
                              </div>
                         </div>
                         <div class="col-4">
                              <div class="result-box">
                                   <label for="result-uk">UK</label><span id="result-uk">99</span>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 chart-col">
                    <div class="section-title">
                         Size Chart <span>(Mens)<span>
                    </div>
                    <table class="table">
                         <thead>
                              <tr>
                                   <th scope="col">
                                        US <i class="fas fa-caret-down fa-lg"></i>
                                   </th>
                                   <th scope="col">
                                        EU <i class="fas fa-caret-down fa-lg"></i>
                                   </th>
                                   <th scope="col">
                                        UK <i class="fas fa-caret-down fa-lg"></i>
                                   </th>
                                   <th scope="col" colspan="2">
                                        <select class="length-unit" id="" aria-label="">
                                             <option class="unit-in" value="in" selected>in</option>
                                             <option class="unit-cm" value="cm">cm</option>
                                        </select>
                                        <i class="fas fa-caret-down fa-lg"></i>
                                   </th>
                              </tr>
                         </thead>
                    </table>
                    <div class="tab-content" id="charts">
                         <div class="tab-pane fade show active" id="mens-content" role="tabpanel" aria-labelledby="mens-tab">
                              <table class="table table-sm table-striped" id="Mens">
                                   <tbody>
                                        <tr>
                                             <td>6</td>
                                             <td>39</td>
                                             <td>5.5</td>
                                             <td class="size-in">9.25</td>
                                             <td class="size-cm">23.5</td>
                                        </tr>
                                        <tr>
                                             <td>6.5</td>
                                             <td>39</td>
                                             <td>6</td>
                                             <td class="size-in">9.5</td>
                                             <td class="size-cm">24.1</td>
                                        </tr>
                                        <tr>
                                             <td>7</td>
                                             <td>40</td>
                                             <td>6.5</td>
                                             <td class="size-in">9.625</td>
                                             <td class="size-cm">24.4</td>
                                        </tr>
                                        <tr>
                                             <td>7.5</td>
                                             <td>40-41</td>
                                             <td>7</td>
                                             <td class="size-in">9.75</td>
                                             <td class="size-cm">24.8</td>
                                        </tr>
                                        <tr>
                                             <td>8</td>
                                             <td>41</td>
                                             <td>7.5</td>
                                             <td class="size-in">9.9375</td>
                                             <td class="size-cm">25.4</td>
                                        </tr>
                                        <tr>
                                             <td>8.5</td>
                                             <td>41-42</td>
                                             <td>8</td>
                                             <td class="size-in">10.125</td>
                                             <td class="size-cm">25.7</td>
                                        </tr>
                                        <tr>
                                             <td>9</td>
                                             <td>42</td>
                                             <td>8.5</td>
                                             <td class="size-in">10.25</td>
                                             <td class="size-cm">26</td>
                                        </tr>
                                        <tr>
                                             <td>9.5</td>
                                             <td>42-43</td>
                                             <td>9</td>
                                             <td class="size-in">10.4375</td>
                                             <td class="size-cm">26.7</td>
                                        </tr>
                                        <tr>
                                             <td>10</td>
                                             <td>43</td>
                                             <td>9.5</td>
                                             <td class="size-in">10.5625</td>
                                             <td class="size-cm">27</td>
                                        </tr>
                                        <tr>
                                             <td>10.5</td>
                                             <td>43-44</td>
                                             <td>10</td>
                                             <td class="size-in">10.75</td>
                                             <td class="size-cm">27.3</td>
                                        </tr>
                                        <tr>
                                             <td>11</td>
                                             <td>44</td>
                                             <td>10.5</td>
                                             <td class="size-in">10.9375</td>
                                             <td class="size-cm">27.9</td>
                                        </tr>
                                        <tr>
                                             <td>11.5</td>
                                             <td>44-45</td>
                                             <td>11</td>
                                             <td class="size-in">11.125</td>
                                             <td class="size-cm">28.3</td>
                                        </tr>
                                        <tr>
                                             <td>12</td>
                                             <td>45</td>
                                             <td>11.5</td>
                                             <td class="size-in">11.25</td>
                                             <td class="size-cm">28.6</td>
                                        </tr>
                                        <tr>
                                             <td>13</td>
                                             <td>46</td>
                                             <td>12.5</td>
                                             <td class="size-in">11.5625</td>
                                             <td class="size-cm">29.4</td>
                                        </tr>
                                        <tr>
                                             <td>14</td>
                                             <td>47</td>
                                             <td>13.5</td>
                                             <td class="size-in">11.875</td>
                                             <td class="size-cm">30.2</td>
                                        </tr>
                                        <tr>
                                             <td>15</td>
                                             <td>48</td>
                                             <td>14.5</td>
                                             <td class="size-in">12.1875</td>
                                             <td class="size-cm">31</td>
                                        </tr>
                                        <tr>
                                             <td>16</td>
                                             <td>49</td>
                                             <td>15.5</td>
                                             <td class="size-in">12.5</td>
                                             <td class="size-cm">31.8</td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                         <div class="tab-pane fade" id="womens-content" role="tabpanel" aria-labelledby="womens-tab">
                              <table class="table table-sm table-striped" id="Womens">
                                   <tbody>
                                        <tr>
                                             <td>4</td>
                                             <td>35</td>
                                             <td>2</td>
                                             <td class="size-in">8.1875</td>
                                             <td class="size-cm">20.8</td>
                                        </tr>
                                        <tr>
                                             <td>4.5</td>
                                             <td>35</td>
                                             <td>2.5</td>
                                             <td class="size-in">8.375</td>
                                             <td class="size-cm">21.3</td>
                                        </tr>
                                        <tr>
                                             <td>5</td>
                                             <td>35-36</td>
                                             <td>3</td>
                                             <td class="size-in">8.5</td>
                                             <td class="size-cm">21.6</td>
                                        </tr>
                                        <tr>
                                             <td>5.5</td>
                                             <td>36</td>
                                             <td>3.5</td>
                                             <td class="size-in">8.75</td>
                                             <td class="size-cm">22.2</td>
                                        </tr>
                                        <tr>
                                             <td>6</td>
                                             <td>36-37</td>
                                             <td>4</td>
                                             <td class="size-in">8.875</td>
                                             <td class="size-cm">22.5</td>
                                        </tr>
                                        <tr>
                                             <td>6.5</td>
                                             <td>37</td>
                                             <td>4.5</td>
                                             <td class="size-in">9.0625</td>
                                             <td class="size-cm">23</td>
                                        </tr>
                                        <tr>
                                             <td>7</td>
                                             <td>37-38</td>
                                             <td>5</td>
                                             <td class="size-in">9.25</td>
                                             <td class="size-cm">23.5</td>
                                        </tr>
                                        <tr>
                                             <td>7.5</td>
                                             <td>38</td>
                                             <td>5.5</td>
                                             <td class="size-in">9.375</td>
                                             <td class="size-cm">23.8</td>
                                        </tr>
                                        <tr>
                                             <td>8</td>
                                             <td>38-39</td>
                                             <td>6</td>
                                             <td class="size-in">9.5</td>
                                             <td class="size-cm">24.1</td>
                                        </tr>
                                        <tr>
                                             <td>8.5</td>
                                             <td>39</td>
                                             <td>6.5</td>
                                             <td class="size-in">9.6875</td>
                                             <td class="size-cm">24.6</td>
                                        </tr>
                                        <tr>
                                             <td>9</td>
                                             <td>39-40</td>
                                             <td>7</td>
                                             <td class="size-in">9.875</td>
                                             <td class="size-cm">25.1</td>
                                        </tr>
                                        <tr>
                                             <td>9.5</td>
                                             <td>40</td>
                                             <td>7.5</td>
                                             <td class="size-in">10</td>
                                             <td class="size-cm">25.4</td>
                                        </tr>
                                        <tr>
                                             <td>10</td>
                                             <td>40-41</td>
                                             <td>8</td>
                                             <td class="size-in">10.1875</td>
                                             <td class="size-cm">25.9</td>
                                        </tr>
                                        <tr>
                                             <td>10.5</td>
                                             <td>41</td>
                                             <td>8.5</td>
                                             <td class="size-in">10.3125</td>
                                             <td class="size-cm">26.2</td>
                                        </tr>
                                        <tr>
                                             <td>11</td>
                                             <td>41-42</td>
                                             <td>9</td>
                                             <td class="size-in">10.5</td>
                                             <td class="size-cm">26.7</td>
                                        </tr>
                                        <tr>
                                             <td>11.5</td>
                                             <td>42</td>
                                             <td>9.5</td>
                                             <td class="size-in">10.6875</td>
                                             <td class="size-cm">27.1</td>
                                        </tr>
                                        <tr>
                                             <td>12</td>
                                             <td>42-43</td>
                                             <td>10</td>
                                             <td class="size-in">10.875</td>
                                             <td class="size-cm">27.6</td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                         <div class="tab-pane fade" id="kids-big-content" role="tabpanel" aria-labelledby="kids-big-tab">
                              <table class="table table-sm table-striped" id="Kids-big">
                                   <tbody>
                                        <tr>
                                             <td>3.5</td>
                                             <td>35</td>
                                             <td>2.5</td>
                                             <td class="size-in">8.625</td>
                                             <td class="size-cm">21.9</td>
                                        </tr>
                                        <tr>
                                             <td>4</td>
                                             <td>36</td>
                                             <td>3</td>
                                             <td class="size-in">8.75</td>
                                             <td class="size-cm">22.2</td>
                                        </tr>
                                        <tr>
                                             <td>4.5</td>
                                             <td>36</td>
                                             <td>3.5</td>
                                             <td class="size-in">9</td>
                                             <td class="size-cm">22.9</td>
                                        </tr>
                                        <tr>
                                             <td>5</td>
                                             <td>37</td>
                                             <td>4</td>
                                             <td class="size-in">9.125</td>
                                             <td class="size-cm">23.2</td>
                                        </tr>
                                        <tr>
                                             <td>5.5</td>
                                             <td>37</td>
                                             <td>4.5</td>
                                             <td class="size-in">9.25</td>
                                             <td class="size-cm">23.5</td>
                                        </tr>
                                        <tr>
                                             <td>6</td>
                                             <td>38</td>
                                             <td>5</td>
                                             <td class="size-in">9.5</td>
                                             <td class="size-cm">24.1</td>
                                        </tr>
                                        <tr>
                                             <td>6.5</td>
                                             <td>38</td>
                                             <td>5.5</td>
                                             <td class="size-in">9.625</td>
                                             <td class="size-cm">24.4</td>
                                        </tr>
                                        <tr>
                                             <td>7</td>
                                             <td>39</td>
                                             <td>6</td>
                                             <td class="size-in">9.75</td>
                                             <td class="size-cm">24.8</td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                         <div class="tab-pane fade" id="kids-small-content" role="tabpanel" aria-labelledby="kids-small-tab">
                              <table class="table table-sm table-striped" id="Kids-small)">
                                   <tbody>
                                        <tr>
                                             <td>10.5</td>
                                             <td>27</td>
                                             <td>9.5</td>
                                             <td class="size-in">6.625</td>
                                             <td class="size-cm">16.8</td>
                                        </tr>
                                        <tr>
                                             <td>11</td>
                                             <td>28</td>
                                             <td>10</td>
                                             <td class="size-in">6.75</td>
                                             <td class="size-cm">17.1</td>
                                        </tr>
                                        <tr>
                                             <td>11.5</td>
                                             <td>29</td>
                                             <td>10.5</td>
                                             <td class="size-in">7</td>
                                             <td class="size-cm">17.8</td>
                                        </tr>
                                        <tr>
                                             <td>12</td>
                                             <td>30</td>
                                             <td>11</td>
                                             <td class="size-in">7.125</td>
                                             <td class="size-cm">18.1</td>
                                        </tr>
                                        <tr>
                                             <td>12.5</td>
                                             <td>30</td>
                                             <td>11.5</td>
                                             <td class="size-in">7.25</td>
                                             <td class="size-cm">18.4</td>
                                        </tr>
                                        <tr>
                                             <td>13</td>
                                             <td>31</td>
                                             <td>12</td>
                                             <td class="size-in">7.5</td>
                                             <td class="size-cm">19.1</td>
                                        </tr>
                                        <tr>
                                             <td>13.5</td>
                                             <td>31</td>
                                             <td>12.5</td>
                                             <td class="size-in">7.625</td>
                                             <td class="size-cm">19.4</td>
                                        </tr>
                                        <tr>
                                             <td>1</td>
                                             <td>32</td>
                                             <td>13</td>
                                             <td class="size-in">7.75</td>
                                             <td class="size-cm">19.7</td>
                                        </tr>
                                        <tr>
                                             <td>1.5</td>
                                             <td>33</td>
                                             <td>14</td>
                                             <td class="size-in">8</td>
                                             <td class="size-cm">20.3</td>
                                        </tr>
                                        <tr>
                                             <td>2</td>
                                             <td>33</td>
                                             <td>1</td>
                                             <td class="size-in">8.125</td>
                                             <td class="size-cm">20.6</td>
                                        </tr>
                                        <tr>
                                             <td>2.5</td>
                                             <td>34</td>
                                             <td>1.5</td>
                                             <td class="size-in">8.25</td>
                                             <td class="size-cm">21</td>
                                        </tr>
                                        <tr>
                                             <td>3</td>
                                             <td>34</td>
                                             <td>2</td>
                                             <td class="size-in">8.5</td>
                                             <td class="size-cm">21.6</td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                         <div class="tab-pane fade" id="toddlers-content" role="tabpanel" aria-labelledby="toddlers-tab">
                              <table class="table table-sm table-striped" id="Toddlers">
                                   <tbody>
                                        <tr>
                                             <td>3.5</td>
                                             <td>19</td>
                                             <td>2.5</td>
                                             <td class="size-in">4.25</td>
                                             <td class="size-cm">10.8</td>
                                        </tr>
                                        <tr>
                                             <td>4</td>
                                             <td>19</td>
                                             <td>3</td>
                                             <td class="size-in">4.5</td>
                                             <td class="size-cm">11.4</td>
                                        </tr>
                                        <tr>
                                             <td>4.5</td>
                                             <td>20</td>
                                             <td>3.5</td>
                                             <td class="size-in">4.625</td>
                                             <td class="size-cm">11.7</td>
                                        </tr>
                                        <tr>
                                             <td>5</td>
                                             <td>20</td>
                                             <td>4</td>
                                             <td class="size-in">4.75</td>
                                             <td class="size-cm">12.1</td>
                                        </tr>
                                        <tr>
                                             <td>5.5</td>
                                             <td>21</td>
                                             <td>4.5</td>
                                             <td class="size-in">5</td>
                                             <td class="size-cm">12.7</td>
                                        </tr>
                                        <tr>
                                             <td>6</td>
                                             <td>22</td>
                                             <td>5</td>
                                             <td class="size-in">5.125</td>
                                             <td class="size-cm">13</td>
                                        </tr>
                                        <tr>
                                             <td>6.5</td>
                                             <td>22</td>
                                             <td>5.5</td>
                                             <td class="size-in">5.25</td>
                                             <td class="size-cm">13.3</td>
                                        </tr>
                                        <tr>
                                             <td>7</td>
                                             <td>23</td>
                                             <td>6</td>
                                             <td class="size-in">5.5</td>
                                             <td class="size-cm">14</td>
                                        </tr>
                                        <tr>
                                             <td>7.5</td>
                                             <td>23</td>
                                             <td>6.5</td>
                                             <td class="size-in">5.625</td>
                                             <td class="size-cm">14.3</td>
                                        </tr>
                                        <tr>
                                             <td>8</td>
                                             <td>24</td>
                                             <td>7</td>
                                             <td class="size-in">5.75</td>
                                             <td class="size-cm">14.6</td>
                                        </tr>
                                        <tr>
                                             <td>8.5</td>
                                             <td>25</td>
                                             <td>7.5</td>
                                             <td class="size-in">6</td>
                                             <td class="size-cm">15.2</td>
                                        </tr>
                                        <tr>
                                             <td>9</td>
                                             <td>25</td>
                                             <td>8</td>
                                             <td class="size-in">6.125</td>
                                             <td class="size-cm">15.6</td>
                                        </tr>
                                        <tr>
                                             <td>9.5</td>
                                             <td>26</td>
                                             <td>8.5</td>
                                             <td class="size-in">6.25</td>
                                             <td class="size-cm">15.9</td>
                                        </tr>
                                        <tr>
                                             <td>10</td>
                                             <td>27</td>
                                             <td>9</td>
                                             <td class="size-in">6.5</td>
                                             <td class="size-cm">16.5</td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                         <div class="tab-pane fade" id="infants-content" role="tabpanel" aria-labelledby="infants-tab">
                              <table class="table table-sm table-striped" id="Infants">
                                   <tbody>
                                        <tr>
                                             <td>0</td>
                                             <td>15</td>
                                             <td>0</td>
                                             <td class="size-in">3.125</td>
                                             <td class="size-cm">7.9</td>
                                        </tr>
                                        <tr>
                                             <td>1</td>
                                             <td>16</td>
                                             <td>0.5</td>
                                             <td class="size-in">3.5</td>
                                             <td class="size-cm">8.9</td>
                                        </tr>
                                        <tr>
                                             <td>1.5</td>
                                             <td>17</td>
                                             <td>1</td>
                                             <td class="size-in">3.625</td>
                                             <td class="size-cm">9.2</td>
                                        </tr>
                                        <tr>
                                             <td>2</td>
                                             <td>17</td>
                                             <td>1</td>
                                             <td class="size-in">3.75</td>
                                             <td class="size-cm">9.5</td>
                                        </tr>
                                        <tr>
                                             <td>2.5</td>
                                             <td>18</td>
                                             <td>1.5</td>
                                             <td class="size-in">4</td>
                                             <td class="size-cm">10.2</td>
                                        </tr>
                                        <tr>
                                             <td>3</td>
                                             <td>18</td>
                                             <td>2</td>
                                             <td class="size-in">4.125</td>
                                             <td class="size-cm">10.5</td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>

          <!-- <div class="row hidden">
               <div class="col-12 col-sm-12 col-lg-6 offset-lg-3">
                    <div class="dropdown">
                         <button class="btn btn-secondary dropdown-toggle" type="button" id="category-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Chart Category: <span class="selected-category">Mens</span>
                         </button>
                         <div id="category-dropdown" class="nav dropdown-menu nav" role="tablist">
                              <a class="dropdown-item active" id="mens-tab" data-toggle="tab" href="#mens-content" role="tab" aria-controls="mens" aria-selected="true">
                                   <span>Mens</span>
                              </a>
                              <a class="dropdown-item" id="womens-tab" data-toggle="tab" href="#womens-content" role="tab" aria-controls="womens" aria-selected="false">
                                   <span>Womens</span>
                              </a>
                              <a class="dropdown-item" id="kids-big-tab" data-toggle="tab" href="#kids-big-content" role="tab" aria-controls="kids-big" aria-selected="false">
                                   <span>Big Kids</span>
                                   <small>(7 – 12 Years)</small>
                              </a>
                              <a class="dropdown-item" id="kids-small-tab" data-toggle="tab" href="#kids-small-content" role="tab" aria-controls="kids-small" aria-selected="false">
                                   <span>Small Kids</span>
                                   <small>(4 – 7 Years)</small>
                              </a>
                              <a class="dropdown-item" id="toddlers-tab" data-toggle="tab" href="#toddlers-content" role="tab" aria-controls="toddlers" aria-selected="false">
                                   <span>Toddlers</span>
                                   <small>(9 Months – 4 Years)</small>
                              </a>
                              <a class="dropdown-item" id="infants-tab" data-toggle="tab" href="#infants-content" role="tab" aria-controls="infants" aria-selected="false">
                                   <span>Infants</span>
                                   <small>(0 – 9 Months)</small>
                              </a>
                         </div>
                    </div>
                    <br>
               </div>
          </div> -->
     </div>

<?php include("footer.php"); ?>
